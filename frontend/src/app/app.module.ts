import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { ReactiveFormsModule, FormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';

import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { MaterialModule } from './material/material.module';
import { NgxSpinnerModule } from 'ngx-spinner';

import { AppRoutingModule } from './app-routing.module';

import { AppComponent } from './app.component';
import { LoginComponent } from './login/login.component';

import { ComponentsModule } from './components/components.module';
import { ServicesIndexModule } from './services/services-index.module';
import { PagesModule } from './pages/pages.module';

@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    ReactiveFormsModule,
    FormsModule,
    HttpClientModule,
    // Material
    BrowserAnimationsModule,
    MaterialModule,
     // Spinner
    NgxSpinnerModule,
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
