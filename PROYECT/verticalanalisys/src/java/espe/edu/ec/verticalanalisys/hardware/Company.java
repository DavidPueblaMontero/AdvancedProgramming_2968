/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package espe.edu.ec.verticalanalisys.hardware;

/**
 *
 * @author jorge
 */
public class Company {
    private String id_company;
    private String name_company;
    private String description_company;
    private String address_company;
    private String phone_company;

    public Company(String id_company, String name_company, String description_company, String address_company, String phone_company) {
        this.id_company = id_company;
        this.name_company = name_company;
        this.description_company = description_company;
        this.address_company = address_company;
        this.phone_company = phone_company;
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

    /**
     * @return the name_company
     */
    public String getName_company() {
        return name_company;
    }

    /**
     * @param name_company the name_company to set
     */
    public void setName_company(String name_company) {
        this.name_company = name_company;
    }

    /**
     * @return the description_company
     */
    public String getDescription_company() {
        return description_company;
    }

    /**
     * @param description_company the description_company to set
     */
    public void setDescription_company(String description_company) {
        this.description_company = description_company;
    }

    /**
     * @return the address_company
     */
    public String getAddress_company() {
        return address_company;
    }

    /**
     * @param address_company the address_company to set
     */
    public void setAddress_company(String address_company) {
        this.address_company = address_company;
    }

    /**
     * @return the phone_company
     */
    public String getPhone_company() {
        return phone_company;
    }

    /**
     * @param phone_company the phone_company to set
     */
    public void setPhone_company(String phone_company) {
        this.phone_company = phone_company;
    }
    
    
    
}
