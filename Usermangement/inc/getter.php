<?php


public function getGrossPrice()
    {
        return round($this->netPrice * (1 + $this->tax[(int) $this->ebook] / 100), 2);
    }

    public function setGrossPrice($grossPrice)
    {
        $this->netPrice = round($grossPrice / (1 + $this->tax[(int) $this->ebook] / 100), 2);

        return $this;
    }

    /**
     * Get the value of tax
     */ 
    public function getTax()
    {
        return $this->ebook ? $this->tax[1] : $this->tax[0];
    }

?>