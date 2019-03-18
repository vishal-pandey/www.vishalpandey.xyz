import { Component, OnInit } from '@angular/core';
import * as Typed from 'typed.js';

@Component({
  selector: 'app-notfound',
  templateUrl: './notfound.component.html',
  styleUrls: ['./notfound.component.css']
})
export class NotfoundComponent implements OnInit {

  constructor() { }

  ngOnInit() {

  	var options = {
      strings: ["404 Page Not Found !!!",],
      typeSpeed: 20,
      backSpeed: 20,
      loop: true,
      backDelay: 1500,
      smartBackspace: true,
    }
    var typed = new Typed(".intro", options);
    
    (document.querySelector(".typed-cursor") as HTMLElement).style.fontSize = "20px";
    (document.querySelector(".typed-cursor") as HTMLElement).style.color = "white";
  }

}
