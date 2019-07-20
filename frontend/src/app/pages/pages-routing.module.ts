import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

// Components
import { PagesComponent } from './pages.component';
import { DashboardComponent } from './dashboard/dashboard.component';

import { LoginGuard } from '../guards/guards.index';

const routes: Routes = [
  {
    path: '',
    component: PagesComponent,
    canActivate: [ LoginGuard ],
    children: [
      {  path: 'home',  component: DashboardComponent, data: { title: 'Dashboard' } },
      { path: '', redirectTo: '/home', pathMatch: 'full' },
    ]
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class PagesRoutingModule { }
