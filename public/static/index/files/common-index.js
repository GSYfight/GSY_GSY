  // 01/27/16 AlexChang. 需要注意，这个档案不经过 compile，要避免 <{ }> 的 smarty 语法

  // warning:必须确认有载入 jQuery
  var $j = jQuery.noConflict();

  // 02/27/16 AlexChang. 测试是否为 json 字串
  function tryParseJSON(jsonString) {
      try {
          var o = JSON.parse(jsonString);
          // Handle non-exception-throwing cases:
          // Neither JSON.parse(false) or JSON.parse(1234) throw errors, hence the type-checking,
          // but... JSON.parse(null) returns 'null', and typeof null === "object",
          // so we must check for that, too.
          if (o && typeof o === "object" && o !== null) {
              return o;
          }
      }
      catch (e) {
      }
      return false;
  }

  // 说明：用于 goods_left_tabs_9_1_9, goods_right_tabs_1_5_4
  //        这两个有 tab 的 widget

  // tab:start
  // 隐藏 tab，显示其中之一
  function hideAllTabsExcept(tabGroup, tabIndex) {
    $$('div.' + tabGroup + '_tab_panel'      ).hide();
    $$('div#' + tabGroup + '_tab' + tabIndex ).show();
  }
  // tab:end

  // 说明：购物车运算
  // 购物车:start
  function increase(gid, now, dur) {
    var last = now;
    now++;
    $j("span.scartNum_" + gid).each(function () {

          $j(this).text(last)
              .css(    {top: -10, opacity: 1})
              .animate({top: -10, opacity: 0}, dur);
        }
    );

    $j("span.cartNum_" + gid).each(function () {
          $j(this).text(now)
              .css(    {top:  10, opacity: 0})
              .animate({top:   0, opacity: 1}, dur);
        }
    );
  }

  function decrease(gid, now, dur) {
    var last = now;
    now--;
    $j("span.scartNum_" + gid).each(function () {
          $j(this).text(last)
              .css(    {top: -10, opacity: 1})
              .animate({top: -10, opacity: 0}, dur);
        }
    );

    $j("span.cartNum_" + gid).each(function () {
          $j(this).text(now)
              .css(    {top: -10, opacity: 0})
              .animate({top:   0, opacity: 1}, dur);
        }
    );
  }

  // 02/28/16 AlexChang. 目前使用 id 取值与设值，如果同一个画面上有两个同样的商品
  // 将会导致后面出现的无法正确使用购物车
  // 可能的解法可以考虑都使用 class，不再使用 id
  // 希望进一步将商品所有逻辑抽出来
  // 考虑的方法有三个，一个是 PHP 统一的 function，这个方法对一般使用者不好修改，要会写 PHP 程式
  // 第二个是使用 smarty 模版，这个比较好修改，但是条件变换时比较繁琐，而且外层传入参数必须固定，
  // 模版的位置也可能出现多次在不同地方
  // 第三个是用一个 javascript 接收 product object，这方法最好修改，也省频宽，输出的物件规格可变，
  // 呈现都在 javascript 做处理就好，但是搜寻引擎对这种方式可能无法爬取，造成 SEO 效果差。
  function add_cart(event,gid) {

    event.stopPropagation();

    var obj_type     = $$('.cart-' + gid).getElement('input[name=obj_type     ]')[0].value;
    var goods_ident  = $$('.cart-' + gid).getElement('input[name=goods_ident  ]')[0].value;
    var goods_id     = $$('.cart-' + gid).getElement('input[name=goods_id     ]')[0].value;
    var product_id   = $$('.cart-' + gid).getElement('input[name=product_id   ]')[0].value;
    var min          = $$('.cart-' + gid).getElement('input[name=min          ]')[0].value;
    var max          = $$('.cart-' + gid).getElement('input[name=max          ]')[0].value;
    var stock        = $$('.cart-' + gid).getElement('input[name=stock        ]')[0].value;
    var cartnum      = $$('.cart-' + gid).getElement('input[name=cartnum      ]')[0].value;
    var nostore_sell = $$('.cart-' + gid).getElement('input[name=nostore_sell ]')[0].value;
      var goodsName  = $$('.cart-' + gid).getElement('input[name=goodsName    ]')[0].value;
    var cartAllNum   = parseInt($$('.ics.op-cart-number').get('html'));
      cartAllNum     = cartAllNum ? cartAllNum : 0;

    var new_cartnum = parseInt(cartnum) + 1;

    //数量小于等于库存数量
    if (new_cartnum <= max) {
      increase(gid, cartnum, max);
    }

    //debugger;

    // 02/27/16 AlexChang.
    //debugger;
    //如果购物车没有则要先加入购物车
    if (cartnum == '0') {
      new Request({
        url: './cart-widget_add-goods.html',
        method: 'post',
        data: {goods_id: goods_id, product_id: product_id, num: 1, stock: stock, mini_cart: true, response_json: true},
        onComplete: function (rsStr) {
          //debugger;
          var rs = tryParseJSON(rsStr);
          if (rs && (rs.status == 'succ' || rs.status > 0)) {
            $j('.xh-'       + gid).each(function () {
              $j(this).addClass('has_add');
            });
            $j('.cartNum_'  + gid).each(function () {
              $j(this).html('1');
            });
            $j('.scartNum_' + gid).each(function () {
              $j(this).html(cartnum);
            });
            $j('.cart-'     + gid + ' input[name=cartnum    ]').each(function () {
              $j(this).val(1);
            });
            $j('.cart-'     + gid + ' input[name=goods_ident]').each(function () {
              $j(this).val('goods_' + goods_id + '_' + product_id);
            });
            $j('.minus-'    + gid).each(function () {
              $j(this).removeClass('disabled');
            });
            $$('.ics.op-cart-number').set('html', cartAllNum + 1);
              /*新加埋点信息*/
              //sdc('addtocart', '加入购物车:' + goodsName + '*1', product_id);
              /*完*/
          } else if (rs && rs.status) { // 02/27/16 AlexChang. json 但非成功
              $j('.cartNum_'  + gid).each(function () {
                  $j(this).html(0);
              });
              //debugger;
              Dialog.alert(rs.status_txt, function (event) {});
//console.log(rsStr);
          } else if (!rs && rsStr) { // 02/27/16 AlexChang. 非 json 字串
              Dialog.alert(rsStr, function (event) {});
//console.log(rsStr);
          }
        }
      }).post();
    } else if (nostore_sell == 1 || new_cartnum <= max) {
      var add_nums = parseInt(cartnum) + 1;
      new Request({
        url: './cart-update.html',
        data: 'obj_type=goods&goods_ident=' + goods_ident + '&goods_id=' + goods_id + '&stock=' + stock + '&modify_quantity[' + goods_ident + '][quantity]=' + add_nums + '&response_json=true',
        onComplete: function (rsStr) {
          var rs = tryParseJSON(rsStr);
          if (rs && (rs.success ||　rs.status > 0)) {
            if (add_nums == stock) {
              $j('.add-'    + gid).each(function () {
                $j(this).addClass('disabled');
              });
            }
            $j('.cartNum_'  + gid).each(function () {
              $j(this).html(add_nums);
            });
            $j('.scartNum_' + gid).each(function () {
              $j(this).html(cartnum);
            });
            $j('.cart-'     + gid + ' input[name=cartnum    ]').each(function () {
              $j(this).val(add_nums);
            });
            $$('.ics.op-cart-number').set('html', cartAllNum + 1);
              /*新加埋点信息*/
              //sdc('addtocart', '加入购物车:' + goodsName + '*1', product_id);
              /*完*/
          } else if (rs && !rs.success) { // 02/27/16 AlexChang. json 但非成功
              $j('.cartNum_'  + gid).each(function () {
                  $j(this).html(0);
              });
              if(rs.status_txt)Dialog.alert(rs.status_txt, function (event) {});
//console.log(rsStr);
          } else if (!rs && rsStr) { // 02/27/16 AlexChang. 非 json 字串
              Dialog.alert(rsStr, function (event) {});
//console.log(rsStr);
          }
        }
      }).post();
    } else {
      $j('.add-'    + gid).each(function () {
        $j(this).addClass('disabled');
      });
      return false;
      //Message.error('购物车数量大于库存的数量！');
      //return false;
    }
  }

  function minus_cart(event,gid) {

    event.stopPropagation();

    var obj_type    = $$('.cart-' + gid).getElement('input[name=obj_type    ]')[0].value;
    var goods_ident = $$('.cart-' + gid).getElement('input[name=goods_ident ]')[0].value;
    var goods_id    = $$('.cart-' + gid).getElement('input[name=goods_id    ]')[0].value;
    var product_id  = $$('.cart-' + gid).getElement('input[name=product_id  ]')[0].value;
    var min         = $$('.cart-' + gid).getElement('input[name=min         ]')[0].value;
    var max         = $$('.cart-' + gid).getElement('input[name=max         ]')[0].value;
    var stock       = $$('.cart-' + gid).getElement('input[name=stock       ]')[0].value;
    var cartnum     = $$('.cart-' + gid).getElement('input[name=cartnum     ]')[0].value;
    var cartAllNum  = parseInt($$('.ics.op-cart-number').get('html'));

    var minus_cartAllNum = parseInt(cartAllNum) - 1;
    var minus_num = parseInt(cartnum) - 1;
    if (minus_num >= 0) {
      decrease(gid, cartnum, max);
    }
    //alert(minus_num);return false;
    if (minus_num > 0) {//cart-removeMiniCart-goods-goods_97_549.html
      var datas = 'obj_type=goods&goods_ident=' + goods_ident + '&goods_id=' + goods_id + '&stock=' + stock + '&modify_quantity[' + goods_ident + '][quantity]=' + minus_num + '&response_json=true';
      //console.log(datas);return false;
      new Request({
        url: './cart-update.html',
        data: datas,
        onComplete: function (rsStr) {
          var rs = tryParseJSON(rsStr);
          if (rs && (rs.success || rs.status>0)) {
            if (cartnum == stock) {
              $j('.add-'    + gid).each(function () {
                $j(this).removeClass('disabled');
              });
            }
            $j('.cartNum_'  + gid).each(function () {
              $j(this).html(minus_num);
            });
            $j('.scartNum_' + gid).each(function () {
              $j(this).html(cartnum);
            });
            $j('.cart-'     + gid + ' input[name=cartnum    ]').each(function () {
              $j(this).val(minus_num);
            });
            $$('.ics.op-cart-number').set('html', minus_cartAllNum);
          } else if (rs && !rs.success) { // 02/27/16 AlexChang. json 但非成功
              if(rs.status_txt)Dialog.alert(rs.status_txt, function (event) {});
//console.log(rsStr);
          } else if (!rs && rsStr) { // 02/27/16 AlexChang. 非 json 字串
              Dialog.alert(rsStr, function (event) {});
//console.log(rsStr);
          }
        }
      }).post();
    } else if (minus_num == '0') {
      var url = './cart-removeMiniCart-goods-goods_' + goods_id + '_' + product_id + '.html';
      //console.log(minus_num,gid);return false;
      new Request({
        url: url,
        onComplete: function (rs) {
//console.log(rs);
          //rs = JSON.decode(rs);
          // if(rs.success) {
          $j('.minus-'    + gid).each(function () {
            $j(this).addClass('disabled');
          });
          $j('.xh-'       + gid).each(function () {
            $j(this).removeClass('has_add');
          });
          $j('.cartNum_'  + gid).each(function () {
            $j(this).html('0');
          });
          $j('.cart-'     + gid + ' input[name=cartnum    ]').each(function () {
            $j(this).val(0);
          });
          $j('.cart-'     + gid + ' input[name=goods_ident]').each(function () {
            $j(this).val('');
          });
          $$('.ics.op-cart-number').set('html', minus_cartAllNum);

          // }
        }
      }).post();

    } else {

      var url = './cart-removeMiniCart-goods-goods_' + goods_id + '_' + product_id + '.html';
      //console.log(datas);return false;
      new Request({
        url: url,
        onComplete: function (rs) {
//console.log(rs);
          //rs = JSON.decode(rs);
          // if(rs.success) {
          $j('.xh-'       + gid).each(function () {
            $j(this).removeClass('has_add');
          });
          $j('.cartNum_'  + gid).each(function () {
            $j(this).html('0');
          });
          $j('.cart-'     + gid + ' input[name=cartnum    ]').each(function () {
            $j(this).val(0);
          });
          $j('.cart-'     + gid + ' input[name=goods_ident]').each(function () {
            $j(this).val('');
          });
          //$$('.ics.op-cart-number').set('html',minus_cartAllNum);
          // }
        }
      }).post();
    }
  }

  function increase_v2(gid, now, dur) {
    var last = now;
    now++;
    $j('.product_dp_'   + gid + ' div.cart_num_front').each(function () {
        $j(this).text(now)
          .css(    {top:  10, opacity: 0})
          .animate({top:   0, opacity: 1}, dur);
        }
    );
  }

  function decrease_v2(gid, now, dur) {
    var last = now;
    now--;
    $j('.product_dp_'   + gid + ' div.cart_num_front').each(function () {
        $j(this).text(now)
          .css(    {top: -10, opacity: 0})
          .animate({top:   0, opacity: 1}, dur);
        }
    );
  }

  function add_cart_v2(event,gid) {

    event.stopPropagation();

    var obj_type     = $$('.product_data_' + gid).getElement('input[name=obj_type     ]')[0].value;
    var goods_ident  = $$('.product_data_' + gid).getElement('input[name=goods_ident  ]')[0].value;
    var goods_id     = $$('.product_data_' + gid).getElement('input[name=goods_id     ]')[0].value;
    var product_id   = $$('.product_data_' + gid).getElement('input[name=product_id   ]')[0].value;
    var min          = $$('.product_data_' + gid).getElement('input[name=min          ]')[0].value;
    var max          = $$('.product_data_' + gid).getElement('input[name=max          ]')[0].value;
    var stock        = $$('.product_data_' + gid).getElement('input[name=stock        ]')[0].value;
    var cartnum      = $$('.product_data_' + gid).getElement('input[name=cartnum      ]')[0].value;
    var nostore_sell = $$('.product_data_' + gid).getElement('input[name=nostore_sell ]')[0].value;
    var cartAllNum   = parseInt($$('.ics.op-cart-number').get('html'));
    cartAllNum = cartAllNum ? cartAllNum : 0;

    var new_cartnum = parseInt(cartnum) + 1;

    //数量小于等于库存数量
    if (new_cartnum <= max) {
      increase_v2(gid, cartnum, 200);
    }

    // 02/27/16 AlexChang.
    //debugger;
    //如果购物车没有则要先加入购物车
    if (cartnum == '0') {
      new Request({
        url: './cart-widget_add-goods.html',
        method: 'post',
        data: {goods_id: goods_id, product_id: product_id, num: 1, stock: stock, mini_cart: true, response_json: true},
        onComplete: function (rsStr) {
          //debugger;
          var rs = tryParseJSON(rsStr);
          if (rs && rs.status == 'succ') {
            //debugger;
            $j('.product_dp_'   + gid + ' .cart_area').each(function () {
              if (!$j(this).hasClass('has')) {
                $j(this).addClass('has');
              }
            });
            $j('.product_dp_'   + gid + ' .cart_num_front').each(function () {
              $j(this).html('1');
            });
            $j('.product_dp_'   + gid + ' .cart_num_back').each(function () {
              $j(this).html(cartnum);
            });
            $j('.product_data_' + gid + ' input[name=cartnum    ]').each(function () {
              $j(this).val(1);
            });
            $j('.product_data_' + gid + ' input[name=goods_ident]').each(function () {
              $j(this).val('goods_' + goods_id + '_' + product_id);
            });
            $j('.product_dp_'   + gid + ' .cart_area ').each(function () {
              $j(this).removeClass('lowerLimit');
            });
            $$('.ics.op-cart-number').set('html', cartAllNum + 1);
          } else if (rs && rs.status) { // 02/27/16 AlexChang. json 但非成功
//console.log(rsStr);
          } else if (!rs && rsStr) { // 02/27/16 AlexChang. 非 json 字串
//console.log(rsStr);
          }
        }
      }).post();
    } else if (nostore_sell == 1 || new_cartnum <= max) {
      var add_nums = parseInt(cartnum) + 1;
      new Request({
        url: './cart-update.html',
        data: 'obj_type=goods&goods_ident=' + goods_ident + '&goods_id=' + goods_id + '&stock=' + stock + '&modify_quantity[' + goods_ident + '][quantity]=' + add_nums + '&response_json=true',
        onComplete: function (rsStr) {
          var rs = tryParseJSON(rsStr);
          if (rs && rs.success) {
            //debugger;
            if (add_nums == stock) {
              $j('.product_dp_'   + gid + ' .cart_area').each(function () {
                if (!$j(this).hasClass('has')) {
                  $j(this).addClass('has');
                }
                if (!$j(this).hasClass('upperLimit')) {
                  $j(this).addClass('upperLimit');
                }
              });
            }
            $j('.product_dp_'   + gid + ' .cart_num_front').each(function () {
              $j(this).html(add_nums);
            });
            $j('.product_dp_'   + gid + ' .cart_num_back').each(function () {
              $j(this).html(cartnum);
            });
            $j('.product_data_' + gid + ' input[name=cartnum    ]').each(function () {
              $j(this).val(add_nums);
            });
            $$('.ics.op-cart-number').set('html', cartAllNum + 1);
          } else if (rs && !rs.success) { // 02/27/16 AlexChang. json 但非成功
//console.log(rsStr);
          } else if (!rs && rsStr) { // 02/27/16 AlexChang. 非 json 字串
//console.log(rsStr);
          }
        }
      }).post();
    } else {
      $j('.product_dp_'   + gid + ' .cart_area').each(function () {
        if (!$j(this).hasClass('has')) {
          $j(this).addClass('has');
        }
        if (!$j(this).hasClass('upperLimit')) {
          $j(this).addClass('upperLimit');
        }
      });
      return false;
      //Message.error('购物车数量大于库存的数量！');
      //return false;
    }
  }

  function minus_cart_v2(event,gid) {

    event.stopPropagation();

    var obj_type    = $$('.product_data_' + gid).getElement('input[name=obj_type    ]')[0].value;
    var goods_ident = $$('.product_data_' + gid).getElement('input[name=goods_ident ]')[0].value;
    var goods_id    = $$('.product_data_' + gid).getElement('input[name=goods_id    ]')[0].value;
    var product_id  = $$('.product_data_' + gid).getElement('input[name=product_id  ]')[0].value;
    var min         = $$('.product_data_' + gid).getElement('input[name=min         ]')[0].value;
    var max         = $$('.product_data_' + gid).getElement('input[name=max         ]')[0].value;
    var stock       = $$('.product_data_' + gid).getElement('input[name=stock       ]')[0].value;
    var cartnum     = $$('.product_data_' + gid).getElement('input[name=cartnum     ]')[0].value;
    var cartAllNum  = parseInt($$('.ics.op-cart-number').get('html'));

    var minus_cartAllNum = parseInt(cartAllNum) - 1;
    var minus_num = parseInt(cartnum) - 1;
    if (minus_num >= 0) {
      decrease_v2(gid, cartnum, 200);
    }
    //alert(minus_num);return false;
    if (minus_num > 0) {//cart-removeMiniCart-goods-goods_97_549.html
      var datas = 'obj_type=goods&goods_ident=' + goods_ident + '&goods_id=' + goods_id + '&stock=' + stock + '&modify_quantity[' + goods_ident + '][quantity]=' + minus_num + '&response_json=true';
      //console.log(datas);return false;
      new Request({
        url: './cart-update.html',
        data: datas,
        onComplete: function (rsStr) {
          var rs = tryParseJSON(rsStr);
          if (rs && rs.success) {
            if (cartnum == stock) {
              $j('.product_dp_'   + gid + ' .cart_area').each(function () {
                if ($j(this).hasClass('upperLimit')) {
                  $j(this).removeClass('upperLimit');
                }
              });
            }
            $j('.product_dp_'   + gid + ' .cart_num_front').each(function () {
              $j(this).html(minus_num);
            });
            $j('.product_dp_'   + gid + ' .cart_num_back').each(function () {
              $j(this).html(cartnum);
            });
            $j('.product_data_' + gid + ' input[name=cartnum    ]').each(function () {
              $j(this).val(minus_num);
            });
            $$('.ics.op-cart-number').set('html', minus_cartAllNum);
          } else if (rs && !rs.success) { // 02/27/16 AlexChang. json 但非成功
//console.log(rsStr);
          } else if (!rs && rsStr) { // 02/27/16 AlexChang. 非 json 字串
//console.log(rsStr);
          }
        }
      }).post();
    } else if (minus_num == '0') {
      var url = './cart-removeMiniCart-goods-goods_' + goods_id + '_' + product_id + '.html';
      //console.log(minus_num,gid);return false;
      new Request({
        url: url,
        onComplete: function (rs) {
//console.log(rs);
          //rs = JSON.decode(rs);
          // if(rs.success) {
          $j('.product_dp_'   + gid + ' .cart_area').each(function () {
            if ($j(this).hasClass('upperLimit')) {
              $j(this).removeClass('upperLimit');
            }
            if (!$j(this).hasClass('lowerLimit')) {
              $j(this).addClass('lowerLimit');
            }
          });
          $j('.product_dp_'   + gid + ' .cart_num_front').each(function () {
            $j(this).html('0');
          });
          $j('.product_data_' + gid + ' input[name=cartnum    ]').each(function () {
            $j(this).val(0);
          });
          $j('.product_data_' + gid + ' input[name=goods_ident]').each(function () {
            $j(this).val('');
          });
          $$('.ics.op-cart-number').set('html', minus_cartAllNum);

          // }
        }
      }).post();

    } else {

      var url = './cart-removeMiniCart-goods-goods_' + goods_id + '_' + product_id + '.html';
      //console.log(datas);return false;
      new Request({
        url: url,
        onComplete: function (rs) {
//console.log(rs);
          //rs = JSON.decode(rs);
          // if(rs.success) {
          $j('.product_dp_'   + gid + ' .cart_area').each(function () {
            if ($j(this).hasClass('upperLimit')) {
              $j(this).removeClass('upperLimit');
            }
            if ($j(this).hasClass('has')) {
              //$j(this).removeClass('has');
            }
          });
          $j('.product_dp_'   + gid + ' .cart_num_front').each(function () {
            $j(this).html('0');
          });
          $j('.product_data_' + gid + ' input[name=cartnum    ]').each(function () {
            $j(this).val(0);
          });
          $j('.product_data_' + gid + ' input[name=goods_ident]').each(function () {
            $j(this).val('');
          });
          //$$('.ics.op-cart-number').set('html',minus_cartAllNum);
          // }
        }
      }).post();
    }
  }
  // 购物车:end

// 诸葛 : start
//window.zhuge = window.zhuge || [];
//window.zhuge.methods = "_init debug identify track trackLink trackForm page".split(" ");
//window.zhuge.factory = function(b) {
//    return function() {
//        var a = Array.prototype.slice.call(arguments);
//        a.unshift(b);
//        window.zhuge.push(a);
//        return window.zhuge
//    }
//};
//for (var i = 0; i < window.zhuge.methods.length; i++) {
//    var key = window.zhuge.methods[i];
//    window.zhuge[key] = window.zhuge.factory(key)
//}
//window.zhuge.load = function(b, x) {
//    if (!document.getElementById("zhuge-js")) {
//        var a = document.createElement("script");
//        var verDate = new Date();
//        var verStr = verDate.getFullYear().toString()
//            + verDate.getMonth().toString() + verDate.getDate().toString();
//
//        a.type = "text/javascript";
//        a.id = "zhuge-js";
//        a.async = !0;
//        a.src = (location.protocol == 'http:' ? "http://sdk.zhugeio.com/zhuge-lastest.min.js?v=" : 'https://zgsdk.zhugeio.com/zhuge-lastest.min.js?v=') + verStr;
//        var c = document.getElementsByTagName("script")[0];
//        c.parentNode.insertBefore(a, c);
//        window.zhuge._init(b, x)
//    }
//};
//window.zhuge.load('1edd5fb44a1541b5aabb54c9fc427d99');
//
//zhuge.identify('18616331586',{email:"iamraymond@raymond.world",proudOf:"桌球"});
// 诸葛 : end