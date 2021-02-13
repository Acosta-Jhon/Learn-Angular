import { Component } from '@angular/core';
import { UserService } from './services/user.service'; 


@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {
  title = 'App-Rest-Full';

  public users:Array<any> = []

  constructor(private userService:UserService){
    this.userService.getUsers().subscribe((res:any) =>{
      this.users = res.data
      console.log(res.data)
    })
  }
}
