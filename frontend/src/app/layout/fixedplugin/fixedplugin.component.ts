import { Component, OnInit } from '@angular/core';
import { SettingsService } from './settings.service';
import { SettingTheme } from './setting-theme.interface';

@Component({
    selector: 'app-fixedplugin',
    templateUrl: 'fixedplugin.component.html'
})

export class FixedPluginComponent implements OnInit{

  settings: SettingTheme;

  public state: boolean = true;

  constructor(public _settingsService: SettingsService) { }

  ngOnInit() {
    this._settingsService.loadSettings();
    this.settings = this._settingsService.settings;
  }

  changeSidebarColor(color) {
    let sidebar = document.querySelector('.sidebar') as HTMLElement;

    this.settings.sidebarColor = color;
    if (sidebar !== undefined) {
        sidebar.setAttribute('data-color', color);
        this._settingsService.setSettings(this.settings);
    }
  }

  changeSidebarActiveColor(color){
    let sidebar = document.querySelector('.sidebar') as HTMLElement;
    this.settings.sidebarActiveColor = color;
    if (sidebar !== undefined){
      this._settingsService.setSettings(this.settings);
    }
  }

}
