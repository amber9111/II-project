var main = function () {
   
   $('a.popup').popup({
    afterOpen : function(){
        var popup = this;
        setTimeout(function(){
            popup.close();
        }, 2000);
    }
});
   
};

