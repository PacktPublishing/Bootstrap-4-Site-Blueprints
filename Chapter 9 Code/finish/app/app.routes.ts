import { provideRouter, RouterConfig }  from '@angular/router';
import { HomeComponent } from './home.component';
import { FeaturesComponent } from './features.component';
import { PricingComponent } from './pricing.component';
import { AboutComponent } from './about.component';

const routes: RouterConfig = [
  {
    path: 'home',
    component: HomeComponent
  },
  {
    path: 'features',
    component: FeaturesComponent
  },
  {
    path: 'pricing',
    component: PricingComponent
  },
  {
    path: 'about',
    component: AboutComponent
  },
  {
  path: '',
  redirectTo: '/home',
  pathMatch: 'full'
  }  
];

export const appRouterProviders = [
  provideRouter(routes)
];
