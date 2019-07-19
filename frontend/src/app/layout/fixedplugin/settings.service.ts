import { Injectable, Inject } from '@angular/core';
import { SettingTheme } from './setting-theme.interface';

@Injectable({
  providedIn: 'root'
})
export class SettingsService {

  settings: SettingTheme = {
    sidebarColor: 'white',
    sidebarActiveColor: 'danger'
  };

  constructor() {
   }

  saveSetttings() {
    localStorage.setItem('settingsTheme', JSON.stringify(this.settings));
  }

  loadSettings() {
    if (localStorage.getItem('settingsTheme')) {
      this.settings = JSON.parse(localStorage.getItem('settingsTheme'));
    }

    this.setSettings( this.settings );
  }

  setSettings( theme: SettingTheme ) {

    let sidebar = document.querySelector('.sidebar') as HTMLElement;
    sidebar.setAttribute('data-color', theme.sidebarColor);
    sidebar.setAttribute('data-active-color', theme.sidebarActiveColor);
    this.settings = theme;
    this.saveSetttings();
  }
}
