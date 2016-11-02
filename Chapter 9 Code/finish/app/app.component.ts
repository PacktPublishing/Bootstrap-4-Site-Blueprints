import { Component } from '@angular/core';
import { ROUTER_DIRECTIVES }  from '@angular/router';
import {NGB_COLLAPSE_DIRECTIVES} from '@ng-bootstrap/ng-bootstrap';

@Component({
    selector: 'my-app',
     templateUrl: 'app/app.component.html',
     directives: [ ROUTER_DIRECTIVES, NGB_COLLAPSE_DIRECTIVES]
    })
export class AppComponent { 
  title = 'Your Business';
  private isCollapsed = true;
}
