// JavaScript Document


/***********************************************
* Ultimate Fade In Slideshow v2.0- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/




var mygallery2=new fadeSlideShow({
	wrapperid: "fadeshow2", //ID of blank DIV on page to house Slideshow
	dimensions: [510, 1186], //width/height of gallery in pixels. Should reflect dimensions of largest image
	imagearray: [
		["images/slideshow_phone/Mobile-Website-Slideshow-01.jpg", "", "", "Beautiful Clock Radio"],
		["images/slideshow_phone/Mobile-Website-Slideshow-02.jpg", "http://www.beautifulclockradio.com", "_self", ""],
		["images/slideshow_phone/Mobile-Website-Slideshow-03.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-04.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-05.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-06.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-07.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-08.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-09.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-10.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-11.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-12.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-13.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-14.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-15.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-16.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-17.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-18.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-19.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-20.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-21.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-22.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-23.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-24.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-25.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-26.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-27.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-28.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-29.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-30.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-31.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-32.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-33.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-34.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-35.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-36.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-37.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-38.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-39.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-40.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-41.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-42.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-43.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-44.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-45.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-46.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-47.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-48.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-49.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-50.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-51.jpg"],
		["images/slideshow_phone/Mobile-Website-Slideshow-52.jpg"]	
		
		//<--no trailing comma after very last image element!
	],
	displaymode: {type:'auto', pause:100, cycles:0, wraparound:false},
	persist: false, //remember last viewed slide and recall within same session?
	fadeduration: 800, //transition duration (milliseconds)
	descreveal: "ondemand",
	togglerid: "fadeshow2toggler"
})

