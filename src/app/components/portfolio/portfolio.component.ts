import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-portfolio',
  templateUrl: './portfolio.component.html',
  styleUrls: ['./portfolio.component.css']
})
export class PortfolioComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  projects = [
  	{
  		name: 'Nav Nirman',
  		photo: 'https://raw.githubusercontent.com/vishal-pandey/cdn/master/navnirman.png',
  		link: 'http://www.navnirman.co/',
  		github: 'https://github.com/vishal-pandey/navnirman.co',
  		tech: 'HTML, CSS, Bootstrap',
  		feat: 'Website for a business of GFRC . Build for the online presence of the Business',
  	},
  	{
  		name: 'RVS Institute',
  		photo: 'https://raw.githubusercontent.com/vishal-pandey/cdn/master/rvsinstitute.png',
  		link: 'http://www.rvsinstitute.com/',
  		github: 'https://www.github.com/vishal-pandey',
  		tech: 'HTML, CSS, PHP, MySql, Bootsrap, Jquery, Python, Javascript',
  		feat: 'Complete Front End And Back End Of the website from scratch. Login Sign Up Payment Gateway Integration, SMS Integration,Student database, Study Material Management system, Custom Admin Panel, Student Dashboard',
  	},
  	{
  		name: 'Saraswati Edu Hub',
  		photo: 'https://raw.githubusercontent.com/vishal-pandey/cdn/master/saraswatieduhub.png',
  		link: 'http://www.saraswatieduhub.com/',
  		github: 'https://github.com/vishal-pandey/saraswatieduhub.com//',
  		tech: 'HTML5, Bootstrap, CSS, PHP, MySql',
  		feat: 'Complete Front End And Back End Of Website LogIn Sign Up script ..Admin Panel.',
  	},
  	{
  		name: 'Vidhan Journal',
  		photo: 'https://raw.githubusercontent.com/vishal-pandey/cdn/master/vidhanjournal.png',
  		link: 'http://www.vidhanjournal.org/',
  		github: 'https://www.github.com/vishal-pandey',
  		tech: 'HTML5, CSS3, Bootstrap, jQuery, PHP, MySql.',
  		feat: 'A Website For a Research Journal Certified by UGC Custom Back End Admin Panel,Slider, Google Map, Image Slider.',
  	},
  	{
  		name: 'Sikkim Mountains',
  		photo: 'https://raw.githubusercontent.com/vishal-pandey/cdn/master/sikkimm.png',
  		link: 'http://www.sikkimmountains.com/',
  		github: 'https://www.github.com/vishal-pandey/',
  		tech: 'HTML, CSS, PHP, MySql, Bootstrap, Jquery',
  		feat: 'Online Booking Of Packages of tour created by Company Owner.HTML5 CSS Bootstrap jQuery Animate.css ',
  	},
  	{
  		name: 'My Volunteer',
  		photo: 'https://raw.githubusercontent.com/vishal-pandey/cdn/master/myvolunteer.png',
  		link: 'http://myvolunteer.in/',
  		github: 'https://github.com/vishal-pandey/myvolunteer.in',
  		tech: 'WordPress',
  		feat: 'Volunteering Service Startup Website',
  	},
  	{
  		name: 'JSP Project',
  		photo: 'https://raw.githubusercontent.com/vishal-pandey/cdn/master/jsp.png',
  		link: 'https://jsp.vishalpandey.xyz/',
  		github: 'https://github.com/vishal-pandey/jsp',
  		tech: 'JSP (Java Server Pages)',
  		feat: 'Basic JSP programs to run on tomcat server',
  	},
  	{
  		name: 'Computer Graphics Project',
  		photo: 'https://raw.githubusercontent.com/vishal-pandey/cdn/master/graphics.png',
  		link: 'https://graphics.vishalpandey.xyz/',
  		github: 'https://github.com/vishal-pandey/graphics',
  		tech: 'JavaScript',
  		feat: 'JavaScript Emplementation of Computer Graphics Algorithm',
  	},
  	{
  		name: 'Web Scrapping',
  		photo: 'https://raw.githubusercontent.com/vishal-pandey/cdn/master/search.png',
  		link: 'https://search.vishalpandey.xyz',
  		github: 'https://github.com/vishal-pandey/search',
  		tech: 'Python',
  		feat: 'Searching All Links on internet using webscrapping',
  	},
  	{
  		name: 'Gifts Boutiq',
  		photo: 'https://raw.githubusercontent.com/vishal-pandey/cdn/master/gifts.png',
  		link: 'https://giftsboutiq.vishalpandey.xyz',
  		github: 'https://github.com/vishal-pandey/giftsboutiq.com',
  		tech: 'Angular, TypeScript',
  		feat: 'Angular Based Ecommerce application platform',
  	},
  	{
  		name: 'Programming Club',
  		photo: 'https://raw.githubusercontent.com/vishal-pandey/cdn/master/pclub.png',
  		link: 'https://vishal-pandey.github.io/programming-club/',
  		github: 'https://github.com/vishal-pandey/programming-club/',
  		tech: 'HTML, CSS, Jquery',
  		feat: 'Website for the GBU CODE WEEK an event organised by the Programming club of the gbu.',
  	},
  	{
  		name: 'Blog | VishalPandey',
  		photo: 'https://raw.githubusercontent.com/vishal-pandey/cdn/master/blog.png',
  		link: 'https://blog.vishalpandey.xyz/',
  		github: 'https://github.com/vishal-pandey/vishalpandeyblog',
  		tech: 'TypeScript, Angular, Wordpress',
  		feat: 'Angular and Wordpress based blogging platform',
  	},
  	{
  		name: 'GBU Social Service Club',
  		photo: 'https://raw.githubusercontent.com/vishal-pandey/cdn/master/gbussc.png',
  		link: 'https://www.gbusocialserviceclub.com/',
  		github: 'https://github.com/vishal-pandey/gbussc',
  		tech: 'TypeScript, Angular',
  		feat: 'Website for GBU Social Service Club',
  	},
  	{
  		name: 'CBTS (Computer Based Test Series)',
  		photo: 'https://raw.githubusercontent.com/vishal-pandey/cdn/master/cbts.png',
  		link: 'https://www.cbts.in/',
  		github: 'https://github.com/vishal-pandey/cbts.in',
  		tech: 'HTML, CSS, Jquery, Python, Angular',
  		feat: 'Online test system',
  	},
  ]


}
