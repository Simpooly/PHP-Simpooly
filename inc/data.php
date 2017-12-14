<?php
$skills = ["HTML", "HTML5", "CSS", "CSS3", "JQuery", "JavaScript", "SASS", "WordPress", "PHP", "Bootstrap","GitHub", ];

$project = [];

$project[101] = [
    "title" => "Tribute Page",

     "img" => "inc/img/screenshot/101/01.png",
      //"img2" => "inc/img/screenshot/101/02.png",

      "url" => "https://codepen.io/Simpooly/full/WEyaam/",

      "goal" => "Designed a static page, inputted HTML and configured page layout with CSS and links to purchase his books if interested.",

      "discription" => "I used HTML and CSS to create a static page designated to one of my idols. It has a well thought out layout to display his most well known books. Beside each book is a section to describe the basic concepts of each album. I implemented a hover feature that added a box shadow, transitioned and increased the size of each photo when a cursor glides over it. If you click on the available area it will link you to the Barns and Noble online bookstore to purchase his products. ",

      "troubles" => "As my first real project, it was interesting to find that knowing the documentation and making it work together were two completely different things. I struggled getting the images of the books to link properly. In the end I found it was not my code, but the URL. Experimentation and trial and error is a must.",

      "outcome" => "",

/*      "catagory" => [
        "HTML",
        "CSS"
        ]*/
];

$project[102] = [
    "title" => "Mock Photography",

     "img" => "inc/img/screenshot/102/01.png",
     // "img2" => ""inc/img/screenshot/102/02.png",

      "url" => "https://codepen.io/Simpooly/full/RZqMNR/",

      "goal" => "Developed a mock photography site featuring a workable navigation, gallery of images and contact form.",

      "discription" => "This is a fully responsive static page that shows a long scrolling static page with distinct sections for the navigation, jumbotron, about, gallery and contact section. In both the jumbotron and footer are buttons to link to my available social media platforms. Headlining is a fully functioning nav bar that jumps to the various sections of the page. The gallery is formatted using flexbox, and will transition to one per line when on a smaller viewport or mobile device.",

      "troubles" => "As a second project, I found myself not needing to look up documentation as often, I had much more CSS information ingrained and was able to implement style quicker. In my process of being excited about my speed, my lack of organization was my downfall. It taught me how important it was to comment and have a system in place so I can find the right documentation. Design and layout break easily if I'm not careful.",

      "outcome" => "",

/*      "catagory" => [
        "HTML",
        "CSS"
        ]*/
];


$project[103] = [
    "title" => "Quote App",

        "img" => "inc/img/screenshot/103/01.png",
        //"img2" => "inc/img/screenshot/103/02.png",

        "url" => "https://codepen.io/Simpooly/full/KXyoeV/",

        "goal" => "Performed my first API project by acquiring JSON data, and displaying a random quote from an API.",

        "discription" => "For this app when you press a button it outputs an INSPIRING random quote for you. I used an ajax function in JQuery to connect to the url. I got the data in JSON format and placed it in my HTML code. Every time the button is clicked it resends a request getting another quote. In Addition to receiving a quote, if one is 'so worthy of your praise' you can press the twitter button. It transfers the quote through a query string to post to your twitter account.",

        "troubles" => "I was overwhelmed with all the different API's out there, some gave a list of quotes others automatically generated them. Learning the process of acquiring the keys and using them correctly in a query took the most time. Once I had the data, selecting the correct information was the downhill slide.",

        "outcome" => "During this project I found true growth going beyond basic HTML and CSS. It taught me that interacting with API's can take time, but as long as I have patience and keep with it I will succeed.",

/*        "catagory" => [
            "HTML",
            "CSS",
            "JQuery",
            "javascript",
            "API"
            ]*/
];

$project[104] = [
    "title" => "Weather App",

     "img" => "inc/img/screenshot/104/01.png",
      //"img2" => "inc/img/screenshot/104/02.png",

      "url" => "https://codepen.io/Simpooly/pen/qPMjwG",

      "goal" => "Provided a basic weather application that accesses users geolocation and displays information according to data. ",

      "discription" => "This app finds where you are located and displays some basic weather information about your surrounding area. It starts with getting your geolocation. Once the longitude and latitude is acquired I can use those as variables in a query string to get weather information about the area. i used fcc-weather-api to acquire the name of the city, weather in fahrenheit and celsius, weather conditions and an icon showing the conditions. I inputed those into the HTML. The button will toggle you back and forth between fahrenheit and celsius",

      "troubles" => "With this project I have learned that finding a good database is important. I used the database FreeCodeCamp provided. They didn't want API keys in CodePen for security and privacy reasons. I got the majority of the project and found out that database did not provide all the information required (ie. city, state). Using a different database such as google maps would have provided more information needed.",

      "outcome" => "In the future, I will learn to do extra research to find the best API and information for my needs. Efficiency is a goal I have in all work I do, it makes things simple and eventually easier, even if the process leading up to that is a little messy.",
/*      "catagory" => [
        "HTML",
        "CSS",
        "JQuery",
        "javascript",
        "API"
        ]*/
];

$project[105] = [
    "title" => "PSD to Web Conversion",

     "img" => "inc/img/screenshot/105/01.png",
      //"img2" => "inc/img/screenshot/105/02.png",
     //"img3" => "inc/img/screenshot/105/03.png",

      "url" => "http://wildcalling.com/",

      "goal" => "Extracted images and used photoshop to recreate design and layout of a page mock up.",

      "discription" => "Working with a sheet in photoshop from a designer I extracted layers and seats of layers as images. during the extraction I minimized them for better load time and performance of the page. The design was then implemented by hand-coding them using CSS, HTML. JQuery was added for interactability with the individual groups of products, allowing them to toggle between being visible and being collapsed.",

      "troubles" => "Creating the page with HTML CSS and JQuery were simple. Learning Photoshop would be the lesson. At first I was extracting individual layers and trying to manually layer them with CSS. Once i learned you can extract multiple layers together it made things much easier. I went through sont online classes and now understand the basics of photoshop.",

      "outcome" => " ",

/*      "catagory" => [
        "HTML",
        "CSS"
        ]*/
];

/*$project[106] = [
    "title" => "Content Migration",
     "img" => "inc/img/screenshot/106/01.png",
      //"img2" => "inc/img/screenshot/106/02.png",
      "url" => "https://www.fcgov.com/utilities/",

      "goal" => "",

      "discription" => "",

      "troubles" => "",

      "outcome" => "",

     "catagory" => [
        "HTML",
        "CSS"
        ]
];*/


?>
