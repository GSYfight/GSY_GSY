(function(){
	var C = function(){
		this.e = encodeURIComponent;
		this.d = decodeURIComponent;
		this.g = "";
		this.h = (location.protocol == "https:");
		this.t = (this.h ? "https://dsp-ddzh.huaat.com" : "http://dsp-ddzh.huaat.com") + "/gm.gif?";   
		this.utmSource="";
	};
	
	C.prototype = {
		init : function(){
			this.M();
			this.I();
		},
		
		ty : function(o){
			return typeof(o) != "undefined";
		},
		
		M : function(){
			typeof(_star_v) != "undefined" ? this.m = _star_v : this.m = "null";
			typeof(_gtype) != "undefined" ? this.type = _gtype : this.type = "null";
			typeof(_star_vk) != "undefined" ?  this._k = _star_vk : this._k = "null";
		},
		
		k : function(o){
			var arrStr = document.cookie.split("; ");
			for(var i = 0;i < arrStr.length;i ++){
			var temp = arrStr[i].split("=");
				if(temp[0] == o) {
					return unescape(temp[1]);
				}
			};
		},
		
		I : function(){
			var _this = this;
			this.g = _this.k('_jstar') || "";
			this.utmSource = this.GetQueryString("utm_source_uv");
			this.A();
		},
		
		_kv : function(k, v){
			this.j4 = this.d(v).split(',');
			this.jv4 = "";
			for(var i = 0; i<this.j4.length; i++){
				this.jv4 += '&' + k + [i+1] +'=' +this.j4[i];
			};
			return this.jv4;
		},
		
		_vv : function(k, n1, n2){
			this.j3 = this.d(k).split(',');
			this.jv = [];
			for(var i = 0; i<this.j3.length; i++){
				this.jv[i] = this.j3[i];
			};
			return _da = "&"+ n1 +"=" + this.jv[0] + "&"+ n2 +"=" + this.jv[1];
		},
		
		A : function(){
			var str = this.g, _da;
			if(_gtype == "1")_da = "&od=" + this.m;
			if(_gtype == "2")_da = "&od=" + this.m;
			if(_gtype == "3")_da = this._vv(this.m, 'od', 'mn');
			if(_gtype == "9")_da = this._vv(this._k, 'od', 'mn') + this._kv('f', this.m) + '&zid=' + _zid;
			var gaccount = window._gaccount;
			if(!gaccount){ gaccount = "";}
			this.url = this.t + 'tp=' + _gtype + str + _da + "&ga="+gaccount+"&gtmac="+gtmac+"&r=" + Math.random()+"&gc=&utmSourceUV="+this.utmSource;
			this.n = "t_" + (new Date()).getTime() + Math.random();
			this.img = window[this.n] = new Image(1,1);
			this.img.onload = (this.img.onerror = function(){window[this.n] = null});			
			this.img.src = this.url;
			this.url = null;
			this.n = null;
			this.img = null;
			
			if(_gtype == "3" && this.m.length>1){
				for(var ii=1;ii<this.m.length;ii++){
					_da = this._vv(this.m[ii], 'od', 'mn');
					this.url = this.t + 'tp=' + _gtype + str + _da + "&ga="+gaccount+"&gtmac="+gtmac+"&r=" + Math.random()+"&gc=&utmSourceUV="+this.utmSource;
					this.n = "t_" + (new Date()).getTime() + Math.random();
					this.img = window[this.n] = new Image(1,1);
					this.img.onload = (this.img.onerror = function(){window[this.n] = null});			
					this.img.src = this.url;
					this.url = null;
					this.n = null;
					this.img = null;
				}
			}
		},
		GetQueryString:function(name)
		{
			 var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
			 var r = window.location.search.substr(1).match(reg);
			 if(r!=null)return  unescape(r[2]); return "";
		}
		
	};

	var ad = new C();
	ad.init();
})();