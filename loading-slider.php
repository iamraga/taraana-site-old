<style>

/* fade slider */
.slides {
    height:250px;
    margin:auto;
    overflow:hidden;
    position:relative;
    width:100%;
}
.slides ul {
    list-style:none;
    position:relative;
}

/* keyframes #anim_slides */
@-webkit-keyframes anim_slides {
    0% {
        opacity:0;
    }
    6% {
        opacity:1;
    }
    24% {
        opacity:1;
    }
    30% {
        opacity:0;
    }
    100% {
        opacity:0;
    }
}
@-moz-keyframes anim_slides {
    0% {
        opacity:0;
    }
    6% {
        opacity:1;
    }
    24% {
        opacity:1;
    }
    30% {
        opacity:0;
    }
    100% {
        opacity:0;
    }
}

.slides ul li {
    opacity:0;
    position:absolute;
    top:0;

    /* css3 animation */
    -webkit-animation-name: anim_slides;
    -webkit-animation-duration: 24.0s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-direction: normal;
    -webkit-animation-delay: 0;
    -webkit-animation-play-state: running;
    -webkit-animation-fill-mode: forwards;

    -moz-animation-name: anim_slides;
    -moz-animation-duration: 24.0s;
    -moz-animation-timing-function: linear;
    -moz-animation-iteration-count: infinite;
    -moz-animation-direction: normal;
    -moz-animation-delay: 0;
    -moz-animation-play-state: running;
    -moz-animation-fill-mode: forwards;
}

/* css3 delays */
.slides ul  li:nth-child(2), .slides ul  li:nth-child(2) div {
    -webkit-animation-delay: 6.0s;
    -moz-animation-delay: 6.0s;
}
.slides ul  li:nth-child(3), .slides ul  li:nth-child(3) div {
    -webkit-animation-delay: 12.0s;
    -moz-animation-delay: 12.0s;
}
.slides ul  li:nth-child(4), .slides ul  li:nth-child(4) div {
    -webkit-animation-delay: 18.0s;
    -moz-animation-delay: 18.0s;
}
.slides ul li img {
    display:block;
}

/* keyframes #anim_titles */
@-webkit-keyframes anim_titles {
    0% {
        left:100%;
        opacity:0;
    }
    5% {
        left:10%;
        opacity:1;
    }
    20% {
        left:10%;
        opacity:1;
    }
    25% {
        left:100%;
        opacity:0;
    }
    100% {
        left:100%;
        opacity:0;
    }
}
@-moz-keyframes anim_titles {
    0% {
        left:100%;
        opacity:0;
    }
    5% {
        left:10%;
        opacity:1;
    }
    20% {
        left:10%;
        opacity:1;
    }
    25% {
        left:100%;
        opacity:0;
    }
    100% {
        left:100%;
        opacity:0;
    }
}

.slides ul li div {
    background-color:#000000;
    border-radius:10px 10px 10px 10px;
    box-shadow:0 0 5px #FFFFFF inset;
    color:#FFFFFF;
    font-size:26px;
    left:10%;
    margin:0 auto;
    padding:20px;
    position:absolute;
    top:50%;
    width:200px;

    /* css3 animation */
    -webkit-animation-name: anim_titles;
    -webkit-animation-duration: 24.0s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-direction: normal;
    -webkit-animation-delay: 0;
    -webkit-animation-play-state: running;
    -webkit-animation-fill-mode: forwards;

    -moz-animation-name: anim_titles;
    -moz-animation-duration: 24.0s;
    -moz-animation-timing-function: linear;
    -moz-animation-iteration-count: infinite;
    -moz-animation-direction: normal;
    -moz-animation-delay: 0;
    -moz-animation-play-state: running;
    -moz-animation-fill-mode: forwards;
}
</style>
<div class="slides" style="margin-left:-3%;">
	    <ul> <!-- slides -->
	        <li> <img u="image" src="lib/img/dance-1.png" />
	            
	        </li>
	        <li> <img u="image" src="lib/img/dance-2.png" />
	            
        </li>
        <li> <img u="image" src="lib/img/dance-3.png" />
	          
	        </li>
	         <li> <img u="image" src="lib/img/dance-4.png" />
	            
	        </li>
	    </ul>
	</div>
