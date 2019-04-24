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
public class FinancialReport {
    private String id_company;
    private double sales;
    private double salesCost;
    private double grossProfit;
    private double expensesAdmiSales;
    private double depreciations;
    private double interestPaid;
    private double profitBeforeTaxes;
    private double taxes;
    private double exerciseUtility;

    public FinancialReport(String id_company, double sales, double salesCost, double grossProfit, double expensesAdmiSales, double depreciations, double interestPaid, double profitBeforeTaxes, double taxes, double exerciseUtility) {
        this.id_company = id_company;
        this.sales = sales;
        this.salesCost = salesCost;
        this.grossProfit = grossProfit;
        this.expensesAdmiSales = expensesAdmiSales;
        this.depreciations = depreciations;
        this.interestPaid = interestPaid;
        this.profitBeforeTaxes = profitBeforeTaxes;
        this.taxes = taxes;
        this.exerciseUtility = exerciseUtility;
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
     * @return the sales
     */
    public double getSales() {
        return sales;
    }

    /**
     * @param sales the sales to set
     */
    public void setSales(double sales) {
        this.sales = sales;
    }

    /**
     * @return the salesCost
     */
    public double getSalesCost() {
        return salesCost;
    }

    /**
     * @param salesCost the salesCost to set
     */
    public void setSalesCost(double salesCost) {
        this.salesCost = salesCost;
    }

    /**
     * @return the grossProfit
     */
    public double getGrossProfit() {
        return grossProfit;
    }

    /**
     * @param grossProfit the grossProfit to set
     */
    public void setGrossProfit(double grossProfit) {
        this.grossProfit = grossProfit;
    }

    /**
     * @return the expensesAdmiSales
     */
    public double getExpensesAdmiSales() {
        return expensesAdmiSales;
    }

    /**
     * @param expensesAdmiSales the expensesAdmiSales to set
     */
    public void setExpensesAdmiSales(double expensesAdmiSales) {
        this.expensesAdmiSales = expensesAdmiSales;
    }

    /**
     * @return the depreciations
     */
    public double getDepreciations() {
        return depreciations;
    }

    /**
     * @param depreciations the depreciations to set
     */
    public void setDepreciations(double depreciations) {
        this.depreciations = depreciations;
    }

    /**
     * @return the interestPaid
     */
    public double getInterestPaid() {
        return interestPaid;
    }

    /**
     * @param interestPaid the interestPaid to set
     */
    public void setInterestPaid(double interestPaid) {
        this.interestPaid = interestPaid;
    }

    /**
     * @return the profitBeforeTaxes
     */
    public double getProfitBeforeTaxes() {
        return profitBeforeTaxes;
    }

    /**
     * @param profitBeforeTaxes the profitBeforeTaxes to set
     */
    public void setProfitBeforeTaxes(double profitBeforeTaxes) {
        this.profitBeforeTaxes = profitBeforeTaxes;
    }

    /**
     * @return the taxes
     */
    public double getTaxes() {
        return taxes;
    }

    /**
     * @param taxes the taxes to set
     */
    public void setTaxes(double taxes) {
        this.taxes = taxes;
    }

    /**
     * @return the exerciseUtility
     */
    public double getExerciseUtility() {
        return exerciseUtility;
    }

    /**
     * @param exerciseUtility the exerciseUtility to set
     */
    public void setExerciseUtility(double exerciseUtility) {
        this.exerciseUtility = exerciseUtility;
    }

    
    
}
