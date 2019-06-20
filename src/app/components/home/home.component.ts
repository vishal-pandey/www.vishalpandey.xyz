import { Component, OnInit } from '@angular/core';
import * as Typed from 'typed.js';


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
                "I make Websites",
                "I make Mobile Apps",
                "You can hire me for projects",
                "I take projects for cloud Computing",
                "I take projects for E-Commerce",
                "I take projects for Management systems",
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

  theClose:boolean = true;

}
