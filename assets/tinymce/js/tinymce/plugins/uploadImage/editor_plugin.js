(function(){tinymce.create('tinymce.plugins.UploadImagePlugin',{init:function(ed,url){ed.addCommand('mceUploadImage',function(){ed.windowManager.open({file:'http://aguestbook.sourceforge.net/cloud/dialog.html',width:320+parseInt(ed.getLang('uploadImage.delta_width',0)),height:320+parseInt(ed.getLang('uploadImage.delta_height',0)),inline:1},{plugin_url:url,some_custom_arg:'custom arg'})});ed.addButton('uploadImage',{title:'uploadImage.desc',cmd:'mceUploadImage',image:url+'/img/image.png'});ed.onNodeChange.add(function(ed,cm,n){cm.setActive('uploadImage',n.nodeName=='IMG')})},createControl:function(n,cm){return null},getInfo:function(){return{longname:'Upload Image plugin',author:'Adel Noureddine',authorurl:'http://aguestbook.sourceforge.net',infourl:'http://aguestbook.sourceforge.net',version:"1.0"}}});tinymce.PluginManager.add('uploadImage',tinymce.plugins.UploadImagePlugin)})();