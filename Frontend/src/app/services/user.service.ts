import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class UserService {
  
  API = 'http://127.0.0.1:8000/api/users';

  constructor(private http: HttpClient) {
    console.log('Servicio User')
   }

   getUsers(){
     let header = new HttpHeaders()
     .set('Type-content', 'application/json')
     return this.http.get(this.API, {
       headers:header
     })
   }
}
