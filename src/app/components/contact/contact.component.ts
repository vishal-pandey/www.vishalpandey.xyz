import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.css']
})
export class ContactComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }


  contacts=[
  	{
  		title: 'WhatsApp',
  		link: 'https://web.whatsapp.com/send?phone=919717130893&text=Hello',
  		icon: '<i class="fa fa-whatsapp" aria-hidden="true"></i>',
  	},
  	{
  		title: 'Facebook',
  		link: 'https://fb.com/the.vishal.pandey',
  		icon: '<i class="fa fa-facebook" aria-hidden="true"></i>',
  	},
  	{
  		title: 'Call',
  		link: 'tel:+919717130893',
  		icon: '<i class="fa fa-phone" aria-hidden="true"></i>',
  	},
  	{
  		title: 'GitHub',
  		link: 'https://github.com/vishal-pandey',
  		icon: '<i class="fa fa-github" aria-hidden="true"></i>',
  	},
  	{
  		title: 'Instagram',
  		link: 'https://www.instagram.com/vishalpandeyxyz/',
  		icon: '<i class="fa fa-instagram" aria-hidden="true"></i>',
  	},
  	{
  		title: 'Twitter',
  		link: 'https://twitter.com/vishalpandeyxyz',
  		icon: '<i class="fa fa-twitter" aria-hidden="true"></i>',
  	},
  	{
  		title: 'LinkedIn',
  		link: 'https://www.linkedin.com/in/thevishalpandey/',
  		icon: '<i class="fa fa-linkedin" aria-hidden="true"></i>',
  	},
  	{
  		title: 'Qoura',
  		link: 'https://vishalpandey.quora.com/',
  		icon: '<i class="fa fa-quora" aria-hidden="true"></i>',
  	},
  	{
  		title: 'StackOverFlow',
  		link: 'https://stackoverflow.com/users/7626313/vishal-pandey',
  		icon: '<i class="fa fa-stack-overflow" aria-hidden="true"></i>',
  	},
  ]


}
