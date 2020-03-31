<?php
namespace PhpDoche\Converter;

class Temperature
{
    //celsius group
    public function celsiusKelvin($celsius)
    {
        return ($celsius + 273.15);
    }

    public function celsiusFahrenheit($celsius)
    {
        return ($celsius * (9 / 5) + 32);
    }

    public function celsiusRankine($celsius)
    {
        return (($celsius + 273.15) * (9 / 5));
    }

    public function celsiusDelisle($celsius)
    {
        return ((100 - $celsius) * (3 / 2));
    }

    public function celsiusNewton($celsius)
    {
        return ($celsius * (33 / 100));
    }

    public function celsiusReamur($celsius)
    {
        return ($celsius * (4 / 5));
    }

    public function celsiusRomer($celsius)
    {
        return (($celsius * (21 / 40)) + 7.5);
    }

    //Fahrenheit Group
    public function fahrenheitCelsius($fahrenheit)
    {
        return (($fahrenheit - 32) * (5 / 9));
    }

    public function fahrenheitKelvin($fahrenheit)
    {
        $celcius = $this->fahrenheitCelsius($fahrenheit);
        return $this->celsiusKelvin($celcius);
    }

    public function fahrenheitRankine($fahrenheit)
    {
        $celsius = $this->fahrenheitCelsius($fahrenheit);
        return $this->celsiusRankine($celsius);
    }

    public function fahrenheitDelisle($fahrenheit)
    {
        $celsius = $this->fahrenheitCelsius($fahrenheit);
        return $this->celsiusDelisle($celsius);
    }

    public function fahrenheitNewton($fahrenheit)
    {
        $celsius = $this->fahrenheitCelsius($fahrenheit);
        return $this->celsiusNewton($celsius);
    }

    public function fahrenheitReamur($fahrenheit)
    {
        $celsius = $this->fahrenheitCelsius($fahrenheit);
        return $this->celsiusReamur($celsius);
    }

    public function fahrenheitRomer($fahrenheit)
    {
        $celsius = $this->fahrenheitCelsius($fahrenheit);
        return $this->celsiusRomer($celsius);
    }

    //Kelvin Group
    public function kelvinCelsius($kelvin)
    {
        return ($kelvin - 273.15);
    }

    public function kelvinFahrenheit($kelvin){
        $celsius = $this->kelvinCelsius($kelvin);
        return $this->celsiusFahrenheit($celsius);
    }

    public function kelvinRankine($kelvin){
        $celsius = $this->kelvinCelsius($kelvin);
        return $this->celsiusRankine($celsius);
    }

    public function kelvinDelisle($kelvin){
        $celsius = $this->kelvinCelsius($kelvin);
        return $this->celsiusDelisle($celsius);
    }

    public function kelvinNewton($kelvin){
        $celsius = $this->kelvinCelsius($kelvin);
        return $this->celsiusNewton($celsius);
    }

    public function kelvinReamur($kelvin){
        $celsius = $this->kelvinCelsius($kelvin);
        return $this->celsiusReamur($celsius);
    }

    public function kelvinRomer($kelvin){
        $celsius = $this->kelvinCelsius($kelvin);
        return $this->celsiusRomer($celsius);
    }

    //Rankine Group
    public function rankineCelsius($rankine)
    {
        return (($rankine - 491.67) * (5 / 9));
    }

    public function rankineFahrenheit($rankine){
        $celsius = $this->rankineCelsius($rankine);
        return $this->celsiusFahrenheit($celsius);
    }

    public function rankineKelvin($rankine){
        $celsius = $this->rankineCelsius($rankine);
        return $this->celsiusKelvin($celsius);
    }

    public function rankineDelisle($rankine){
        $celsius = $this->rankineCelsius($rankine);
        return $this->celsiusDelisle($celsius);
    }

    public function rankineNewton($rankine){
        $celsius = $this->rankineCelsius($rankine);
        return $this->celsiusNewton($celsius);
    }

    public function rankineReamur($rankine){
        $celsius = $this->rankineCelsius($rankine);
        return $this->celsiusReamur($celsius);
    }

    public function rankineRomer($rankine){
        $celsius = $this->rankineCelsius($rankine);
        return $this->celsiusRomer($celsius);
    }

    //Delisle Group
    public function delisleCelsius($delisle){
        return (100-$delisle*(2/3));
    }

    public function delisleFahrenheit($delisle){
        $celsius = $this->delisleCelsius($delisle);
        return $this->celsiusFahrenheit($celsius);
    }

    public function delisleKelvin($delisle){
        $celsius = $this->delisleCelsius($delisle);
        return $this->celsiusKelvin($celsius);
    }

    public function delisleRankine($delisle){
        $celsius = $this->delisleCelsius($delisle);
        return $this->celsiusRankine($celsius);
    }

    public function delisleNewton($delisle){
        $celsius = $this->delisleCelsius($delisle);
        return $this->celsiusNewton($celsius);
    }

    public function delisleReamur($delisle){
        $celsius = $this->delisleCelsius($delisle);
        return $this->celsiusReamur($celsius);
    }

    public function delisleRomer($delisle){
        $celsius = $this->delisleCelsius($delisle);
        return $this->celsiusRomer($celsius);
    }

    //Newton Group
    public function newtonCelsius($newton){
        return ($newton*(100/33));
    }

    public function newtonFahrenheit($newton){
        $celsius = $this->newtonCelsius($newton);
        return $this->celsiusFahrenheit($celsius);
    }

    public function newtonKelvin($newton){
        $celsius = $this->newtonCelsius($newton);
        return $this->celsiusKelvin($celsius);
    }

    public function newtonRankine($newton){
        $celsius = $this->newtonCelsius($newton);
        return $this->celsiusRankine($celsius);
    }

    public function newtonDelisle($newton){
        $celsius = $this->newtonCelsius($newton);
        return $this->celsiusDelisle($celsius);
    }

    public function newtonReamur($newton){
        $celsius = $this->newtonCelsius($newton);
        return $this->celsiusReamur($celsius);
    }

    public function newtonRomer($newton){
        $celsius = $this->newtonCelsius($newton);
        return $this->celsiusRomer($celsius);
    }

    //Reamur Group
    public function reamurCelsius($reamur){
        return ($reamur*(5/4));
    }

    public function reamurFahrenheit($reamur){
        $celsius = $this->reamurCelsius($reamur);
        return $this->celsiusFahrenheit($celsius);
    }

    public function reamurKelvin($reamur){
        $celsius = $this->reamurCelsius($reamur);
        return $this->celsiusKelvin($celsius);
    }

    public function reamurRankine($reamur){
        $celsius = $this->reamurCelsius($reamur);
        return $this->celsiusRankine($celsius);
    }

    public function reamurDelisle($reamur){
        $celsius = $this->reamurCelsius($reamur);
        return $this->celsiusDelisle($celsius);
    }

    public function reamurNewton($reamur){
        $celsius = $this->reamurCelsius($reamur);
        return $this->celsiusNewton($celsius);
    }

    public function reamurRomer($reamur){
        $celsius = $this->reamurCelsius($reamur);
        return $this->celsiusRomer($celsius);
    }

    //Romer Group
    public function romerCelsius($romer){
        return (($romer-7.5)*(40/21));
    }

    public function romerFahrenheit($romer){
        $celsius = $this->romerCelsius($romer);
        return $this->celsiusFahrenheit($celsius);
    }

    public function romerKelvin($romer){
        $celsius = $this->romerCelsius($romer);
        return $this->celsiusKelvin($celsius);
    }

    public function romerRankine($romer){
        $celsius = $this->romerCelsius($romer);
        return $this->celsiusRankine($celsius);
    }

    public function romerDelisle($romer){
        $celsius = $this->romerCelsius($romer);
        return $this->celsiusDelisle($celsius);
    }

    public function romerNewton($romer){
        $celsius = $this->romerCelsius($romer);
        return $this->celsiusNewton($celsius);
    }

    public function romerReamur($romer){
        $celsius = $this->romerCelsius($romer);
        return $this->celsiusReamur($celsius);
    }
}
