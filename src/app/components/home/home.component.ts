import { Component, OnInit } from '@angular/core';
import Typed from 'typed.js';


@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  constructor() { }


  ngOnInit() {
  	var options = {
      strings: ["Hi", 
                "My Name Is Vishal Pandey",
                "I am Freelance Software Developer",
                "I provide solutions related to Machine Learning",
                "I provide solutions related to Computer Vision",
                "I provide solutions related to Forcasting and Prediction",
                "Click Contact to Contact Me",
                "For hiring Call me directly",
                "Phone no. is below",
                "Thank You",
                ],
      typeSpeed: 40,
      backSpeed: 50,
      // loop: true,
      backDelay: 2000,
      smartBackspace: true,
    }
    var typed = new Typed(".intro", options);
    
    (document.querySelector(".typed-cursor") as HTMLElement).style.fontSize = "20px";
    (document.querySelector(".typed-cursor") as HTMLElement).style.color = "white";

  }
  close(){
    console.log("Close clicked");
    document.querySelector('div.console').setAttribute('style', 'display:none');
    document.querySelector('div.bringBackButton').setAttribute('style', 'display:inital');
  }
  bringBack(){
    document.querySelector('div.console').setAttribute('style', 'display:initial');
    document.querySelector('div.bringBackButton').setAttribute('style', 'display:none');
  }

}
