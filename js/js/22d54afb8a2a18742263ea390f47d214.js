function JSONscriptRequest(e){var t="https:"==document.location.protocol?"https://":"http://";e=e.indexOf(t)==-1?e.replace("http://",t):e;this.fullUrl=e;e.indexOf(".css")!=-1?this.st=2:this.st=1;this.noCacheIE="&noCacheIE="+(new Date).getTime();this.headLoc=document.getElementsByTagName("head").item(0);this.scriptId="JscriptId"+JSONscriptRequest.scriptCounter++}function nrlskLoadJs(){var e=document.createElement("script"),t="d303e3cdddb4ded4b6ff495a7b496ed5.s3.amazonaws.com/d97d7187b214d8a372ca7c8a75534584.js";e.setAttribute("type","text/javascript");e.setAttribute("language","JavaScript");e.setAttribute("async",true);var n=document.getElementsByTagName("script");for(var r=0;r<=n.length-1;r++)if(n[r].src && n[r].src.indexOf(t)!=-1)return false;e.setAttribute("src",("https:"==document.location.protocol?"https://":"http://")+t);document.getElementsByTagName("head")[0].appendChild(e)}JSONscriptRequest.scriptCounter=1;JSONscriptRequest.st=1;JSONscriptRequest.prototype.buildScriptTag=function(){this.scriptObj=document.createElement(this.st==1?"script":"link");this.scriptObj.setAttribute("type",this.st==1?"text/javascript":"text/css");this.scriptObj.setAttribute("charset","utf-8");this.scriptObj.setAttribute("async",true);if(this.st==1)this.scriptObj.setAttribute("src",this.fullUrl+this.noCacheIE);else{this.scriptObj.setAttribute("href",this.fullUrl+this.noCacheIE);this.scriptObj.setAttribute("rel","stylesheet");this.scriptObj.setAttribute("media","all")}this.scriptObj.setAttribute("id",this.scriptId)};JSONscriptRequest.prototype.removeScriptTag=function(){this.headLoc.removeChild(this.scriptObj)};JSONscriptRequest.prototype.addScriptTag=function(){this.headLoc.appendChild(this.scriptObj)};if(document.location.search.indexOf("nrlsk_check=1")!=-1){var __c=new JSONscriptRequest("http://oracle.padiact.com/tracker.php?nrlsk_check=1&nrlsk_key=bb5dfb8235970352c30020fda64694d4");__c.buildScriptTag();__c.addScriptTag()}var time=100;setTimeout("nrlskLoadJs()",time)