import { Component } from '@angular/core';
import {NGB_RATING_DIRECTIVES} from '@ng-bootstrap/ng-bootstrap';

@Component({
  selector: 'home',
  template: `<h3>Home</h3>
  <ngb-rating [(rate)]="currentRate"></ngb-rating>
<hr>
<pre>Rate: <b>{{currentRate}}</b></pre>`,
directives: [NGB_RATING_DIRECTIVES]
})
export class HomeComponent { 
time = {hour: 13, minute: 30, second: 30};
  currentRate = 10;
}
