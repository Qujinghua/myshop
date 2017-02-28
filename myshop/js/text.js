window.onload = function(){
  var lIndex = 0;
    $(".r-arr").click(function(){
                                           // 当被点击时，执行下面事件

    if (lIndex<4) {                                    
     lIndex++;   // lIndex = lIndex + 1;
    }
    else{
     lIndex=0; 
    }

    // (lIndex<4)?(lIndex++):(lIndex=0);


  $(".but ul li").eq(lIndex).addClass("hover").siblings().removeClass("hover");
      $(".pic img").eq(lIndex).fadeIn().siblings().fadeOut();// 选中除了前面的图片的其他所有图片让其隐藏;fadeIn,fadeOut(慢慢淡入淡出)
    });

    
    $(".l-arr").click(function(){
      if (lIndex>0) {
       lIndex--;
      }
      else{
       lIndex=4;
      }
      $(".but ul li").eq(lIndex).addClass("hover").siblings().removeClass("hover");
       $(".pic img").eq(lIndex).fadeIn().siblings().fadeOut();// siblings().hide选中除了前面的图片的其他所有图片让其隐藏;fadeIn,fadeOut(慢慢淡入淡出默认400毫秒；可以fadeOut（300）自己定义)
    });


    $(".but ul li").click(function(){
      $(this).addClass("hover").siblings().removeClass("hover");
      var nIndex = $(this).index();
      $(".pic img").eq(nIndex).fadeIn(300).siblings().fadeOut(300);
      lIndex=nIndex;
    });


    function dingshi(){
      setInterval(function(){
      (lIndex<4)?(lIndex++):(lIndex=0);   
    $(".but ul li").eq(lIndex).addClass("hover").siblings().removeClass("hover");
    $(".pic img").eq(lIndex).fadeIn().siblings().fadeOut();
      },2000);
    };
    dingshi();//执行
}