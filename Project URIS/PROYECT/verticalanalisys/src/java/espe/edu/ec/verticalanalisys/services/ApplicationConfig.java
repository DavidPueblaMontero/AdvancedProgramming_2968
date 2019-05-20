/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package espe.edu.ec.verticalanalisys.services;

import java.util.Set;
import javax.ws.rs.core.Application;

/**
 *
 * @author jorge, jess, david
 */
@javax.ws.rs.ApplicationPath("financialanalisys")
public class ApplicationConfig extends Application {

    @Override
    public Set<Class<?>> getClasses() {
        Set<Class<?>> resources = new java.util.HashSet<>();
        addRestResourceClasses(resources);
        return resources;
    }

    /**
     * Do not modify addRestResourceClasses() method.
     * It is automatically populated with
     * all resources defined in the project.
     * If required, comment out calling this method in getClasses().
     */
    private void addRestResourceClasses(Set<Class<?>> resources) {
        resources.add(espe.edu.ec.verticalanalisys.services.Companies.class);
        resources.add(espe.edu.ec.verticalanalisys.services.Financial.class);
        resources.add(espe.edu.ec.verticalanalisys.services.Report.class);
        resources.add(espe.edu.ec.verticalanalisys.services.Users.class);
    }
    
}
