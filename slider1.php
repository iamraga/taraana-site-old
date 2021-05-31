
    <script type="text/javascript" src="lib/js/jssor.js"></script>
  
    <script type="text/javascript" src="lib/js/jssor.slider.mini.js"></script>
	
	 <script type="text/javascript" src="lib/js/jquery.colorbox-min.js"></script>
	 
  <script>
        jssor_slider1_starter = function (containerId) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 300,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 80,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                $SlideHeight: 150,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 3, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 3,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 0,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 2,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 2,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0),

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $SpacingY: 5,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 2                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                }
            };
            var jssor_slider1 = new $JssorSlider$(containerId, options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth) {
                    var sliderWidth = parentWidth;

                    //keep the slider width no more than 809
                    sliderWidth = Math.min(sliderWidth, 809);

                    jssor_slider1.$ScaleWidth(sliderWidth);
                }
                else
                    $Jssor$.$Delay(ScaleSlider, 30);
            }

            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);

            $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };

        jssor_sliderh_starter = function (containerId) {
            var sliderhOptions = {
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1
                $AutoPlaySteps: 4,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $SlideDuration: 300,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                $SlideWidth: 200,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 150,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 3, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 4,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 0,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 0,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 0,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                }
            }
            var jssor_sliderh = new $JssorSlider$(containerId, sliderhOptions);
        };
    </script>
    
	<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				
				if(screen.width < 767)
				{
					
					$(".group2").colorbox({rel:'group2', transition:"fade", width:"100%"});
				}
				else
				{
				
				$(".group2").colorbox({rel:'group2', transition:"fade", width:"auto" });
				} 

				
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				
			});
	</script>
	
    <!-- sliderh style begin -->
    <style>
        /* jssor slider bullet navigator skin 03 css */
        /*
        .jssorb03 div           (normal)
        .jssorb03 div:hover     (normal mouseover)
        .jssorb03 .av           (active)
        .jssorb03 .av:hover     (active mouseover)
        .jssorb03 .dn           (mousedown)
        */
        .jssorb03 {
            position: absolute;
        }
        .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
            position: absolute;
            /* size of bullet elment */
            width: 21px;
            height: 21px;
            text-align: center;
            line-height: 21px;
            color: white;
            font-size: 12px;
            background: url(../img/b03.png) no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb03 div { background-position: -5px -4px; }
        .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
        .jssorb03 .av { background-position: -65px -4px; }
        .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }
    </style>
	
    <!-- sliderh style end -->

    <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 809px; height: 456px; overflow: hidden; ">
            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 809px; height: 456px;
                overflow: hidden;">
                <div>
                    <div id="sliderh1_container" style="position: relative; top: 0px; left: 0px; width: 809px;
                        height: 150px;">

                        <!-- Slides Container -->
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 809px; height: 150px;
                            overflow: hidden;">
                            <div><a class="group2" href="lib/img/gallery/s22/big/1.jpg"><img u="image" src="lib/img/gallery/s22/small/1.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/s22/big/2.jpg"><img u="image" src="lib/img/gallery/s22/small/2.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/s22/big/3.jpg"><img u="image" src="lib/img/gallery/s22/small/3.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/s22/big/4.jpg"><img u="image" src="lib/img/gallery/s22/small/4.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/s22/big/5.jpg"><img u="image" src="lib/img/gallery/s22/small/5.jpg" /></a></div>
							<div><a class="group2" href="lib/img/gallery/s22/big/6.jpg"><img u="image" src="lib/img/gallery/s22/small/6.jpg" /></a></div>
                            <!--<div><a class="group2" href="lib/img/gallery/s22/big/7.jpg"><img u="image" src="lib/img/gallery/s22/small/7.jpg" /></a></div>-->
                            <div><a class="group2" href="lib/img/gallery/s22/big/8.jpg"><img u="image" src="lib/img/gallery/s22/small/8.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/s22/big/9.jpg"><img u="image" src="lib/img/gallery/s22/small/9.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/s22/big/10.jpg"><img u="image" src="lib/img/gallery/s22/small/10.jpg" /></a></div>
							<div><a class="group2" href="lib/img/gallery/s22/big/11.jpg"><img u="image" src="lib/img/gallery/s22/small/11.jpg" /></a></div>
                            <!--<div><a class="group2" href="lib/img/gallery/s22/big/12.jpg"><img u="image" src="lib/img/gallery/s22/small/12.jpg" /></a></div>-->
                            <div><a class="group2" href="lib/img/gallery/s22/big/13.jpg"><img u="image" src="lib/img/gallery/s22/small/13.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/s22/big/14.jpg"><img u="image" src="lib/img/gallery/s22/small/14.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/s22/big/15.jpg"><img u="image" src="lib/img/gallery/s22/small/15.jpg" /></a></div>
							<div><a class="group2" href="lib/img/gallery/s22/big/16.jpg"><img u="image" src="lib/img/gallery/s22/small/16.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/s22/big/17.jpg"><img u="image" src="lib/img/gallery/s22/small/17.jpg" /></a></div>
							<div><a class="group2" href="lib/img/gallery/sg/big/38.jpg"><img u="image" src="lib/img/gallery/sg/small/38.jpg" /></a></div>
                            <!--<div><a class="group2" href="lib/img/gallery/s22/big/18.jpg"><img u="image" src="lib/img/gallery/s22/small/18.jpg" /></a></div>-->
                           
							
                           
                        </div>
                        <!--#region Bullet Navigator Skin Begin -->
                        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
                        <!-- bullet navigator container -->
                        <div u="navigator" class="jssorb03" style="bottom: 10px; right: 10px;">
                            <!-- bullet navigator item prototype -->
                            <div u="prototype"><div u="numbertemplate"></div></div>
                        </div>
                        <!--#endregion Bullet Navigator Skin End -->
                        <!-- Trigger -->
                        <script>
                            jssor_sliderh_starter('sliderh1_container');
                        </script>
                    </div>
                </div>
                <div>
                    <div id="sliderh2_container" style="position: relative; top: 0px; left: 0px; width: 809px;
                        height: 150px;">

                        <!-- Slides Container -->
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 809px; height: 150px;
                            overflow: hidden;">
                             <div><a class="group2" href="lib/img/gallery/sg/big/1.jpg"><img u="image" src="lib/img/gallery/sg/small/1.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/sg/big/2.jpg"><img u="image" src="lib/img/gallery/sg/small/2.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/sg/big/3.jpg"><img u="image" src="lib/img/gallery/sg/small/3.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/sg/big/4.jpg"><img u="image" src="lib/img/gallery/sg/small/4.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/sg/big/5.jpg"><img u="image" src="lib/img/gallery/sg/small/5.jpg" /></a></div>
							<div><a class="group2" href="lib/img/gallery/sg/big/6.jpg"><img u="image" src="lib/img/gallery/sg/small/6.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/sg/big/7.jpg"><img u="image" src="lib/img/gallery/sg/small/7.jpg" /></a></div>
							<div><a class="group2" href="lib/img/gallery/sg/big/8.jpg"><img u="image" src="lib/img/gallery/sg/small/8.jpg" /></a></div>
							<div><a class="group2" href="lib/img/gallery/sg/big/9.jpg"><img u="image" src="lib/img/gallery/sg/small/9.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/sg/big/10.jpg"><img u="image" src="lib/img/gallery/sg/small/10.jpg" /></a></div>
							<div><a class="group2" href="lib/img/gallery/nk/big/1.jpg"><img u="image" src="lib/img/gallery/nk/small/1.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/nk/big/2.jpg"><img u="image" src="lib/img/gallery/nk/small/2.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/nk/big/3.jpg"><img u="image" src="lib/img/gallery/nk/small/3.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/nk/big/4.jpg"><img u="image" src="lib/img/gallery/nk/small/4.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/nk/big/5.jpg"><img u="image" src="lib/img/gallery/nk/small/5.jpg" /></a></div>
							<div><a class="group2" href="lib/img/gallery/nk/big/6.jpg"><img u="image" src="lib/img/gallery/nk/small/6.jpg" /></a></div>
                            
                        </div>
                        <!--#region Bullet Navigator Skin Begin -->
                        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
                        <!-- bullet navigator container -->
                        <div u="navigator" class="jssorb03" style="bottom: 10px; right: 10px;">
                            <!-- bullet navigator item prototype -->
                            <div u="prototype"><div u="numbertemplate"></div></div>
                        </div>
                        <!--#endregion Bullet Navigator Skin End -->
                        <!-- Trigger -->
                        <script>
                            jssor_sliderh_starter('sliderh2_container');
                        </script>
                    </div>
                </div>
                <div>
                    <div id="sliderh3_container" style="position: relative; top: 0px; left: 0px; width: 809px;
                        height: 150px;">

                        <!-- Slides Container -->
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 809px; height: 150px;
                            overflow: hidden;">
                             <div><a class="group2" href="lib/img/gallery/ps/big/1.jpg"><img u="image" src="lib/img/gallery/ps/small/1.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/ps/big/2.jpg"><img u="image" src="lib/img/gallery/ps/small/2.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/ps/big/3.jpg"><img u="image" src="lib/img/gallery/ps/small/3.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/ps/big/4.jpg"><img u="image" src="lib/img/gallery/ps/small/4.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/ps/big/5.jpg"><img u="image" src="lib/img/gallery/ps/small/5.jpg" /></a></div>
							<div><a class="group2" href="lib/img/gallery/ps/big/6.jpg"><img u="image" src="lib/img/gallery/ps/small/6.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/ps/big/7.jpg"><img u="image" src="lib/img/gallery/ps/small/7.jpg" /></a></div>
							<div><a class="group2" href="lib/img/gallery/ps/big/8.jpg"><img u="image" src="lib/img/gallery/ps/small/8.jpg" /></a></div>
							<div><a class="group2" href="lib/img/gallery/ps/big/9.jpg"><img u="image" src="lib/img/gallery/ps/small/9.jpg" /></a></div>
                            <!--<div><a class="group2" href="lib/img/gallery/ps/big/10.jpg"><img u="image" src="lib/img/gallery/ps/small/10.jpg" /></a></div>-->
							<div><a class="group2" href="lib/img/gallery/ps/big/11.jpg"><img u="image" src="lib/img/gallery/ps/small/11.jpg" /></a></div>
                            <!--<div><a class="group2" href="lib/img/gallery/ps/big/12.jpg"><img u="image" src="lib/img/gallery/ps/small/12.jpg" /></a></div>-->
                            <div><a class="group2" href="lib/img/gallery/ps/big/13.jpg"><img u="image" src="lib/img/gallery/ps/small/13.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/ps/big/14.jpg"><img u="image" src="lib/img/gallery/ps/small/14.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/ps/big/15.jpg"><img u="image" src="lib/img/gallery/ps/small/15.jpg" /></a></div>
							<div><a class="group2" href="lib/img/gallery/ps/big/16.jpg"><img u="image" src="lib/img/gallery/ps/small/16.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/ps/big/17.jpg"><img u="image" src="lib/img/gallery/ps/small/17.jpg" /></a></div>
							<div><a class="group2" href="lib/img/gallery/ps/big/18.jpg"><img u="image" src="lib/img/gallery/ps/small/18.jpg" /></a></div>
							<!--<div><a class="group2" href="lib/img/gallery/ps/big/19.jpg"><img u="image" src="lib/img/gallery/ps/small/19.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/ps/big/20.jpg"><img u="image" src="lib/img/gallery/ps/small/20.jpg" /></a></div>-->
                        </div>
                        <!--#region Bullet Navigator Skin Begin -->
                        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
                        <!-- bullet navigator container -->
                        <div u="navigator" class="jssorb03" style="bottom: 10px; right: 10px;">
                            <!-- bullet navigator item prototype -->
                            <div u="prototype"><div u="numbertemplate"></div></div>
                        </div>
                        <!--#endregion Bullet Navigator Skin End -->
                        <!-- Trigger -->
                        <script>
                            jssor_sliderh_starter('sliderh3_container');
                        </script>
                    </div>
                </div>
                <div>
                    <div id="sliderh4_container" style="position: relative; top: 0px; left: 0px; width: 809px;
                        height: 150px;">

                        <!-- Slides Container -->
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 809px; height: 150px;
                            overflow: hidden;">
                           
							<div><a class="group2" href="lib/img/gallery/sg/big/11.jpg"><img u="image" src="lib/img/gallery/sg/small/11.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/sg/big/12.jpg"><img u="image" src="lib/img/gallery/sg/small/12.jpg" /></a></div>
                            <!--<div><a class="group2" href="lib/img/gallery/sg/big/13.jpg"><img u="image" src="lib/img/gallery/sg/small/13.jpg" /></a></div>-->
                            <div><a class="group2" href="lib/img/gallery/sg/big/14.jpg"><img u="image" src="lib/img/gallery/sg/small/14.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/sg/big/15.jpg"><img u="image" src="lib/img/gallery/sg/small/15.jpg" /></a></div>
							<div><a class="group2" href="lib/img/gallery/sg/big/16.jpg"><img u="image" src="lib/img/gallery/sg/small/16.jpg" /></a></div>
                            <!--<div><a class="group2" href="lib/img/gallery/sg/big/17.jpg"><img u="image" src="lib/img/gallery/sg/small/17.jpg" /></a></div>-->
							<div><a class="group2" href="lib/img/gallery/sg/big/18.jpg"><img u="image" src="lib/img/gallery/sg/small/18.jpg" /></a></div>
							<div><a class="group2" href="lib/img/gallery/sg/big/19.jpg"><img u="image" src="lib/img/gallery/sg/small/19.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/sg/big/20.jpg"><img u="image" src="lib/img/gallery/sg/small/20.jpg" /></a></div>
							<div><a class="group2" href="lib/img/gallery/sg/big/21.jpg"><img u="image" src="lib/img/gallery/sg/small/21.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/sg/big/22.jpg"><img u="image" src="lib/img/gallery/sg/small/22.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/sg/big/23.jpg"><img u="image" src="lib/img/gallery/sg/small/23.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/sg/big/24.jpg"><img u="image" src="lib/img/gallery/sg/small/24.jpg" /></a></div>
                            <!--<div><a class="group2" href="lib/img/gallery/sg/big/25.jpg"><img u="image" src="lib/img/gallery/sg/small/25.jpg" /></a></div>
							<div><a class="group2" href="lib/img/gallery/sg/big/26.jpg"><img u="image" src="lib/img/gallery/sg/small/26.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/sg/big/27.jpg"><img u="image" src="lib/img/gallery/sg/small/27.jpg" /></a></div>
							<div><a class="group2" href="lib/img/gallery/sg/big/28.jpg"><img u="image" src="lib/img/gallery/sg/small/28.jpg" /></a></div>
							<div><a class="group2" href="lib/img/gallery/sg/big/29.jpg"><img u="image" src="lib/img/gallery/sg/small/29.jpg" /></a></div>-->
                            <div><a class="group2" href="lib/img/gallery/sg/big/30.jpg"><img u="image" src="lib/img/gallery/sg/small/30.jpg" /></a></div>
							<div><a class="group2" href="lib/img/gallery/sg/big/31.jpg"><img u="image" src="lib/img/gallery/sg/small/31.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/sg/big/32.jpg"><img u="image" src="lib/img/gallery/sg/small/32.jpg" /></a></div>
                            <!--<div><a class="group2" href="lib/img/gallery/sg/big/33.jpg"><img u="image" src="lib/img/gallery/sg/small/33.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/sg/big/34.jpg"><img u="image" src="lib/img/gallery/sg/small/34.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/sg/big/35.jpg"><img u="image" src="lib/img/gallery/sg/small/35.jpg" /></a></div>
							<div><a class="group2" href="lib/img/gallery/sg/big/36.jpg"><img u="image" src="lib/img/gallery/sg/small/36.jpg" /></a></div>-->
                            <div><a class="group2" href="lib/img/gallery/sg/big/37.jpg"><img u="image" src="lib/img/gallery/sg/small/37.jpg" /></a></div>
							
							<!--<div><a class="group2" href="lib/img/gallery/sg/big/39.jpg"><img u="image" src="lib/img/gallery/sg/small/39.jpg" /></a></div>
                            <div><a class="group2" href="lib/img/gallery/sg/big/40.jpg"><img u="image" src="lib/img/gallery/sg/small/40.jpg" /></a></div>-->
                        </div>
                        <!--#region Bullet Navigator Skin Begin -->
                        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
                        <!-- bullet navigator container -->
                        <div u="navigator" class="jssorb03" style="bottom: 10px; right: 10px;">
                            <!-- bullet navigator item prototype -->
                            <div u="prototype"><div u="numbertemplate"></div></div>
                        </div>
                        <!--#endregion Bullet Navigator Skin End -->
                        <!-- Trigger -->
                        <script>
                            jssor_sliderh_starter('sliderh4_container');
                        </script>
                    </div>
                </div>
            </div>
        
            <!--#region Bullet Navigator Skin Begin -->
            <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
            <!--<style>
                /* jssor slider bullet navigator skin 02 css */
                /*
                .jssorb02 div           (normal)
                .jssorb02 div:hover     (normal mouseover)
                .jssorb02 .av           (active)
                .jssorb02 .av:hover     (active mouseover)
                .jssorb02 .dn           (mousedown)
                */
                .jssorb02 {
                    position: absolute;
                }
                .jssorb02 div, .jssorb02 div:hover, .jssorb02 .av {
                    position: absolute;
                    /* size of bullet elment */
                    width: 21px;
                    height: 21px;
                    text-align: center;
                    line-height: 21px;
                    color: white;
                    font-size: 12px;
                    background: url(../img/b02.png) no-repeat;
                    overflow: hidden;
                    cursor: pointer;
                }
                .jssorb02 div { background-position: -5px -5px; }
                .jssorb02 div:hover, .jssorb02 .av:hover { background-position: -35px -5px; }
                .jssorb02 .av { background-position: -65px -5px; }
                .jssorb02 .dn, .jssorb02 .dn:hover { background-position: -95px -5px; }
            </style>-->
			
	
			
            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb02" style="bottom: 16px; left: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype"><div u="numbertemplate"></div></div>
            </div>
            <!--#endregion Bullet Navigator Skin End -->
            <a style="display: none" href="">Bootstrap Slider</a>
            <!-- Trigger -->
            <script>
                jssor_slider1_starter('slider1_container');
            </script>
        </div>
    <!-- Jssor Slider End -->