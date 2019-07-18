import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { MaterialModule } from '../material/material.module';

// Components
import { MatConfirmDialogComponent } from './mat-confirm-dialog/mat-confirm-dialog.component';

// Services
import { DialogService } from './services/dialog.service';

@NgModule({
  declarations: [
    MatConfirmDialogComponent,
  ],
  exports: [
    MatConfirmDialogComponent,
  ],
  imports: [
    CommonModule,
    MaterialModule,
  ],
  providers: [
    DialogService,
  ],
  entryComponents: [
    MatConfirmDialogComponent,
  ]
})
export class ComponentsModule { }
