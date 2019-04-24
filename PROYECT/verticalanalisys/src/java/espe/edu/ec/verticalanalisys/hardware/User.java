/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package espe.edu.ec.verticalanalisys.hardware;

/**
 *
 * @author jorge, jess, david
 */
public class User {
    private String id_user;
    private String name_user;
    private String pass_user;
    private String id_company;

    public User(String id_user, String name_user, String pass_user, String id_company) {
        this.id_user = id_user;
        this.name_user = name_user;
        this.pass_user = pass_user;
        this.id_company = id_company;
    }

    /**
     * @return the id_user
     */
    public String getId_user() {
        return id_user;
    }

    /**
     * @param id_user the id_user to set
     */
    public void setId_user(String id_user) {
        this.id_user = id_user;
    }

    /**
     * @return the name_user
     */
    public String getName_user() {
        return name_user;
    }

    /**
     * @param name_user the name_user to set
     */
    public void setName_user(String name_user) {
        this.name_user = name_user;
    }

    /**
     * @return the pass_user
     */
    public String getPass_user() {
        return pass_user;
    }

    /**
     * @param pass_user the pass_user to set
     */
    public void setPass_user(String pass_user) {
        this.pass_user = pass_user;
    }

    /**
     * @return the id_company
     */
    public String getId_company() {
        return id_company;
    }

    /**
     * @param id_company the id_company to set
     */
    public void setId_company(String id_company) {
        this.id_company = id_company;
    }
    
    
    
}
