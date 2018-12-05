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
                "I make Desktop apps",
                "Click Portfolio for my Projects",
                "Click Skills to see my Skills",
                "Click Contact to Contact Me",
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
