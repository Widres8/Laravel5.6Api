import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { ReactiveFormsModule, FormsModule } from '@angular/forms';

import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { MaterialModule } from './material/material.module';

import { AppRoutingModule } from './app-routing.module';

import { AppComponent } from './app.component';

import { ComponentsModule } from './components/components.module';
import { ServicesIndexModule } from './services/services-index.module';
import { PagesModule } from './pages/pages.module';

@NgModule({
  declarations: [
    AppComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    ReactiveFormsModule,
    FormsModule,
    // Material
    BrowserAnimationsModule,
    MaterialModule,
    // Self
    ComponentsModule,
    ServicesIndexModule,
    PagesModule,
  ],
  providers: [

  ],
  bootstrap: [AppComponent],
})
export class AppModule { }
