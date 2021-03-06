import { NgModule }             from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HomeComponent } from './components/home/home.component';
import { NotfoundComponent } from './components/notfound/notfound.component';
import { ContactComponent } from './components/contact/contact.component';
import { PortfolioComponent } from './components/portfolio/portfolio.component';
import { SkillsComponent } from './components/skills/skills.component';
import { GalleryComponent } from './components/gallery/gallery.component';

const routes: Routes = [
	{
		path:"",
		component: HomeComponent
	},
	{
		path: "contact",
		component: ContactComponent
	},
	{
		path: "portfolio",
		component: PortfolioComponent
	},
	{
		path: "skills",
		component: SkillsComponent
	},
	{
		path: "gallery",
		component: GalleryComponent
	},
	{
		path: '**',
		component: NotfoundComponent
	}
];

@NgModule({
  imports: [ RouterModule.forRoot(routes) ],
  exports: [ RouterModule ]
})
export class AppRoutingModule {}
