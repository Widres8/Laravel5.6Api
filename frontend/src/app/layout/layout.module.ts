import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';

import { SidebarComponent } from './sidebar/sidebar.component';
import { FixedPluginComponent } from './fixedplugin/fixedplugin.component';
import { FooterComponent } from './footer/footer.component';
import { NavbarComponent } from './navbar/navbar.component';


@NgModule({
  imports: [
    CommonModule,
    RouterModule,
    NgbModule,
  ],
  declarations: [
    SidebarComponent,
    FixedPluginComponent,
    FooterComponent,
    NavbarComponent,
  ],
  exports: [
    SidebarComponent,
    FixedPluginComponent,
    FooterComponent,
    NavbarComponent,
  ]
})
export class LayoutModule { }
