import { Component, OnInit } from '@angular/core';
import { RouteInfo } from './route-info.interface';

export const ROUTES: RouteInfo[] = [
  { path: '/dashboard',     title: 'Dashboard',         icon: 'fa fa-home',       class: 'active' },
  { path: '/user',          title: 'User Profile',      icon: 'nc-icon nc-single-02',  class: '' },
];

@Component({
    selector: 'app-sidebar',
    templateUrl: 'sidebar.component.html',
})

export class SidebarComponent implements OnInit {
    public menuItems: any[];
    ngOnInit() {
        this.menuItems = ROUTES.filter(menuItem => menuItem);
    }
}
