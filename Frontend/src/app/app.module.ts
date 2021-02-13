import { HttpClientModule } from '@angular/common/http'; // <-this
import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppComponent } from './app.component';

@NgModule({
  declarations: [
    AppComponent
  ],
  imports: [
    BrowserModule,
    HttpClientModule  // <---Import Module
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
