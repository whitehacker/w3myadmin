package resources;

import javax.faces.bean.ManagedBean;
import javax.faces.bean.RequestScoped;

@ManagedBean ( name ="Employee")
@RequestScoped
public class Beans {
	public Beans(){
		
	}
	public String greetings(){
		return "Welcome to JSF";
	}
	

}
