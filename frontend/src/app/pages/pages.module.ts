import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { PagesRoutingModule } from './pages-routing.module';
import { LayoutModule } from '../layout/layout.module';

import { PagesComponent } from './pages.component';
import { DashboardComponent } from './dashboard/dashboard.component';


@NgModule({
  declarations: [
    PagesComponent,
    DashboardComponent,
  ],
  imports: [
    CommonModule,
    PagesRoutingModule,
    LayoutModule,
  ]
})
export class PagesModule { }
