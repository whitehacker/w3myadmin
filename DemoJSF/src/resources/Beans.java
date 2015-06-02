package resources;

import javax.faces.bean.ManagedBean;
import javax.faces.bean.RequestScoped;

@ManagedBean (name = "greeting")
@RequestScoped 
public class Beans {
	public Beans(){
		
	}
	public String greet(){
		return "Welcome to JSF";
	}
		
}
