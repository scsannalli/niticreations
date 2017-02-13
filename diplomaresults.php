<!DOCTYPE HTML>
<html>
<head>
<title>Diploma Results</title>
<link rel="stylesheet" type="text/css" href="style-sign.css">
</head>

<body id="body-color" bgcolor="#E0ECF8">
<fieldset style="width: 100%; opacity: 0.5; background-color: white">
<h3>Diploma Results</h3>
</fieldset>
<div id="Sign-In" align="center">
<fieldset style="width: 40%; opacity: 0.9; background-color: #B0C4DE"><legend>Enter
your ECode</legend>
<form method="POST" action="diplomaresults.php">
<div align="right">E-Code :<input type="text" name="ecode" size="40"><br>
</div>
<input id="button" type="submit" name="submit" value="submit"></form>
</fieldset>
</div>

<?php

$ecode1 = KIMS1017DEC001;
$ecode2 = KIMS1017DCE001;

$ecode=htmlentities(trim($_POST["ecode"]));
//echo "This".$ecode;
if($ecode1 == $ecode)

{

	echo "<div id=\"Results\" align=\"center\"><h3>Results</h3></div><br>";
	
	echo "<div><table  align=\"center\">";
	echo "<tr><td>Name:  </td><td> SHIVAPPA PUJAR </td></tr>";
	echo "<tr><td>E Code:  </td><td>KIMS1017DEC001  </td></tr>";
	echo "<tr><td>Semester :  </td><td>1 </td></tr>";
	echo "<tr><td>Branch:  </td><td> ELECTRONICS & COMMUNICATION </td></tr>";
	echo "<tr><td>Year Of Passing:  </td><td> 2012 Dec </td></tr>";
	echo "<tr><td>:  </td><td>  </td></tr>";
	echo "</table><br></div>";

	echo "<table border=\"1\" align=\"center\">";
	echo "<tr><td>Paper Code:  </td><td>Subject:</td> <td>Marks</td> <td>Min</td><td>Obtained</td></tr>";
	echo "<tr><td>DEC101:  </td><td>PROFESSIONAL COMMUNICATION:</td> <td>100</td> <td>40</td><td>60</td></tr>";
	echo "<tr><td>DEC102:  </td><td>APPLIED MATHEMATICS 1:</td> <td>100</td> <td>40</td><td>70</td></tr>";
	echo "<tr><td>DEC103:  </td><td>APPLIED PHYSICS:</td> <td>100</td> <td>40</td><td>63</td></tr>";
	echo "<tr><td>DEC104:  </td><td>APPLIED CHEMISTRY:</td> <td>100</td> <td>40</td><td>59</td></tr>";
	echo "<tr><td>DEC105:  </td><td>PRACTICAL:</td> <td>100</td> <td>40</td><td>62</td></tr>";
	
	echo "<tr><td>  </td><td>Grand Total</td> <td>500</td> <td>200</td><td>314</td></tr>";
	echo "</table>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	echo "<div><table  align=\"center\">";
	echo "<tr><td>Name:  </td><td> SHIVAPPA PUJAR </td></tr>";
	echo "<tr><td>E Code:  </td><td>KIMS1017DEC001  </td></tr>";
	echo "<tr><td>Semester :  </td><td>2 </td></tr>";
	echo "<tr><td>Branch:  </td><td> ELECTRONICS & COMMUNICATION </td></tr>";
	echo "<tr><td>Year Of Passing:  </td><td> 2013 June </td></tr>";
	echo "<tr><td>:  </td><td>  </td></tr>";
	echo "</table><br></div>";

	echo "<table border=\"1\" align=\"center\">";
	echo "<tr><td>Paper Code:  </td><td>Subject:</td> <td>Marks</td> <td>Min</td><td>Obtained</td></tr>";
	echo "<tr><td>DEC106:  </td><td>APPLIED MECHANICS:</td> <td>100</td> <td>40</td><td>64</td></tr>";
	echo "<tr><td>DEC107:  </td><td>ENGINEERING DRAWING:</td> <td>100</td> <td>40</td><td>59</td></tr>";
	echo "<tr><td>DEC108:  </td><td>COMPUTER APPLICATION FOR ENGINEERING:</td> <td>100</td> <td>40</td><td>58</td></tr>";
	echo "<tr><td>DEC109:  </td><td>BUILDING MATERIAL:</td> <td>100</td> <td>40</td><td>68</td></tr>";
	echo "<tr><td>DEC110:  </td><td>WORKSHOP PRACTICE:</td> <td>100</td> <td>40</td><td>62</td></tr>";

	echo "<tr><td>  </td><td>Grand Total</td> <td>500</td> <td>200</td><td>311</td></tr>";
	echo "</table>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	

	echo "<div><table  align=\"center\">";
	echo "<tr><td>Name:  </td><td> SHIVAPPA PUJAR </td></tr>";
	echo "<tr><td>E Code:  </td><td>KIMS1017DEC001  </td></tr>";
	echo "<tr><td>Semester :  </td><td>3 </td></tr>";
	echo "<tr><td>Branch:  </td><td> ELECTRONICS & COMMUNICATION </td></tr>";
	echo "<tr><td>Year Of Passing:  </td><td> 2013 Dec </td></tr>";
	echo "<tr><td>:  </td><td>  </td></tr>";
	echo "</table><br></div>";

	echo "<table border=\"1\" align=\"center\">";
	echo "<tr><td>Paper Code:  </td><td>Subject:</td> <td>Marks</td> <td>Min</td><td>Obtained</td></tr>";
	echo "<tr><td>DEC114:  </td><td>APPLIED MATHEMATICS:</td> <td>100</td> <td>40</td><td>60</td></tr>";
	echo "<tr><td>DEC115:  </td><td>ELECTRONICTRONICS INSTRUMENTS AND MEASUREMENTS :</td> <td>100</td> <td>40</td><td>70</td></tr>";
	echo "<tr><td>DEC116:  </td><td>ELECTRICAL ENGINEERING:</td> <td>100</td> <td>40</td><td>68</td></tr>";
	echo "<tr><td>DEC117:  </td><td>ELECTRONINCS DEVICES AND CIRCUITS:</td> <td>100</td> <td>40</td><td>59</td></tr>";
	echo "<tr><td>DEC118:  </td><td>PRINCIPAL OF DIGITAL TECHNIQUES:</td> <td>100</td> <td>40</td><td>62</td></tr>";
	echo "<tr><td>DEC119:  </td><td>PROGRAMMING 'C':</td> <td>100</td> <td>40</td><td>72</td></tr>";
	echo "<tr><td>DEC120:  </td><td>PROFESSIONAL PRACTICES:</td> <td>100</td> <td>40</td><td>55</td></tr>";
	echo "<tr><td>  </td><td>Grand Total</td> <td>700</td> <td>280</td><td>446</td></tr>";
	echo "</table>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";


	echo "<table border=\"0\" align=\"center\">";
	echo "<tr><td>Name:  </td><td> SHIVAPPA PUJAR </td></tr>";
	echo "<tr><td>E Code:  </td><td>KIMS1017DEC001  </td></tr>";
	echo "<tr><td>Semester :  </td><td>4 </td></tr>";
	echo "<tr><td>Branch:  </td><td> ELECTRONICS & COMMUNICATION </td></tr>";
	echo "<tr><td>Year Of Passing:  </td><td> 2014 June </td></tr>";
	echo "<tr><td>:  </td><td>  </td></tr>";
	echo "</table>";

	echo "<table border=\"1\" align=\"center\">";
	echo "<tr><td>Paper Code:  </td><td>Subject:</td> <td>Marks</td> <td>Min</td><td>Obtained</td></tr>";
	echo "<tr><td>DEC121:  </td><td>ENVIRONMENTAL STUDIES:</td> <td>100</td> <td>40</td><td>70</td></tr>";
	echo "<tr><td>DEC122:  </td><td>INDUSTRIAL MEASUREMENTS:</td> <td>100</td> <td>40</td><td>62</td></tr>";
	echo "<tr><td>DEC123:  </td><td>ANALOG COMMUNICATION:</td> <td>100</td> <td>40</td><td>58</td></tr>";
	echo "<tr><td>DEC124:  </td><td>POWER ELECTRONICS:</td> <td>100</td> <td>40</td><td>65</td></tr>";
	echo "<tr><td>DEC125:  </td><td>LINEAR ITEGRATED CIRCUITS:</td> <td>100</td> <td>40</td><td>68</td></tr>";
	echo "<tr><td>DEC126:  </td><td>VISUAL BASIC:</td> <td>100</td> <td>40</td><td>60</td></tr>";
	echo "<tr><td>DEC127:  </td><td>PROFESSIONAL PRACTICES II:</td> <td>100</td> <td>40</td><td>72</td></tr>";
	echo "<tr><td>  </td><td>Grand Total</td> <td>700</td> <td>280</td><td>455</td></tr>";
	echo "</table>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";

	echo "<table border=\"0\" align=\"center\">";
	echo "<tr><td>Name:  </td><td> SHIVAPPA PUJAR </td></tr>";
	echo "<tr><td>E Code:  </td><td>KIMS1017DEC001  </td></tr>";
	echo "<tr><td>Semester :  </td><td>5 </td></tr>";
	echo "<tr><td>Branch:  </td><td> ELECTRONICS & COMMUNICATION </td></tr>";
	echo "<tr><td>Year Of Passing:  </td><td> 2014 Dec </td></tr>";
	echo "<tr><td>:  </td><td>  </td></tr>";
	echo "</table>";

	echo "<table border=\"1\" align=\"center\">";
	echo "<tr><td>Paper Code:  </td><td>Subject:</td> <td>Marks</td> <td>Min</td><td>Obtained</td></tr>";
	echo "<tr><td>DEC128:  </td><td>PRINCIPALS OF COMPUTER ARCHITECTURE & MAINTAINANCE:</td> <td>100</td> <td>40</td><td>59</td></tr>";
	echo "<tr><td>DEC129:  </td><td>MICRO CONTROLLERS:</td> <td>100</td> <td>40</td><td>68</td></tr>";
	echo "<tr><td>DEC130:  </td><td>DIGITAL COMMUNICATION:</td> <td>100</td> <td>40</td><td>63</td></tr>";
	echo "<tr><td>DEC131:  </td><td>INDUSTRIAL ELECTRONICS:</td> <td>100</td> <td>40</td><td>62</td></tr>";
	echo "<tr><td>DEC132:  </td><td>AUDIO VIDEO ENGINEERING:</td> <td>100</td> <td>40</td><td>58</td></tr>";
	echo "<tr><td>DEC133:  </td><td>MAITAINANCE OF ELECTRONIC EQUIPMENTS:</td> <td>100</td> <td>40</td><td>55</td></tr>";
	echo "<tr><td>DEC134:  </td><td>PROFESSIONAL PRACTICES V:</td> <td>100</td> <td>40</td><td>70</td></tr>";
	echo "<tr><td>DEC135:  </td><td>INDUSTRIAL PROJECT & ENTERPREUNERSHIP DEVELOPMENT:</td> <td>100</td> <td>40</td><td>55</td></tr>";
	echo "<tr><td>  </td><td>Grand Total</td> <td>800</td> <td>320</td><td>490</td></tr>";
	echo "</table>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";



	echo "<table border=\"0\" align=\"center\">";
	echo "<tr><td>Name:  </td><td> SHIVAPPA PUJAR </td></tr>";
	echo "<tr><td>E Code:  </td><td>KIMS1017DEC001  </td></tr>";
	echo "<tr><td>Semester :  </td><td>6 </td></tr>";
	echo "<tr><td>Branch:  </td><td> ELECTRONICS & COMMUNICATION </td></tr>";
	echo "<tr><td>Year Of Passing:  </td><td> 2015 June </td></tr>";
	echo "<tr><td>:  </td><td>  </td></tr>";
	echo "</table>";

	echo "<table border=\"1\" align=\"center\">";
	echo "<tr><td>Paper Code:  </td><td>Subject:</td> <td>Marks</td> <td>Min</td><td>Obtained</td></tr>";
	echo "<tr><td>DEC136:  </td><td>CONTROL SYSTEM:</td> <td>100</td> <td>40</td><td>55</td></tr>";
	echo "<tr><td>DEC137:  </td><td>ADVANCE COMMUNICATION SYSTEM:</td> <td>100</td> <td>40</td><td>65</td></tr>";
	echo "<tr><td>DEC138:  </td><td>MANAGEMENT:</td> <td>100</td> <td>40</td><td>70</td></tr>";
	echo "<tr><td>DEC139:  </td><td>INDUSTRIAL PROJECT:</td> <td>100</td> <td>40</td><td>75</td></tr>";
	echo "<tr><td>DEC140:  </td><td>PROFESSIONAL PRACTICES VI:</td> <td>100</td> <td>40</td><td>80</td></tr>";
	echo "<tr><td>DEC141:  </td><td>ELECTIVE I (VLSI DESIGN):</td> <td>100</td> <td>40</td><td>52</td></tr>";
	echo "<tr><td>DEC132:  </td><td>ELECTIVE II (EMBEDDED SYSTEM):</td> <td>100</td> <td>40</td><td>63</td></tr>";
	echo "<tr><td>  </td><td>Grand Total</td> <td>700</td> <td>280</td><td>460</td></tr>";
	echo "</table>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";



}


else if($ecode2 == $ecode)

{

	echo "<div id=\"Results\" align=\"center\"><h3>Results</h3></div><br>";

	echo "<div><table  align=\"center\">";
	echo "<tr><td>Name:  </td><td>KANAKAGIRI SIVAPRASAD  </td></tr>";
	echo "<tr><td>E Code:  </td><td>KIMS1017DCE001  </td></tr>";
	echo "<tr><td>Semester :  </td><td>1 </td></tr>";
	echo "<tr><td>Branch:  </td><td> CIVIL </td></tr>";
	echo "<tr><td>Year Of Passing:  </td><td>2012 DEC</td></tr>";
	echo "<tr><td>:  </td><td>  </td></tr>";
	echo "</table><br></div>";
	
	echo "<table border=\"1\" align=\"center\">";
	echo "<tr><td>Paper Code:  </td><td>Subject:</td> <td>Marks</td> <td>Min</td><td>Obtained</td></tr>";
	echo "<tr><td>DCE101:  </td><td>PROFESSIONAL COMMUNICATION:</td> <td>100</td> <td>40</td><td>56</td></tr>";
	echo "<tr><td>DCE102:  </td><td>APPLIED MATHEMATICS 1:</td> <td>100</td> <td>40</td><td>69</td></tr>";
	echo "<tr><td>DCE103:  </td><td>APPLIED PHYSICS:</td> <td>100</td> <td>40</td><td>68</td></tr>";
	echo "<tr><td>DCE104:  </td><td>APPLIED CHEMISTRY:</td> <td>100</td> <td>40</td><td>59</td></tr>";
	echo "<tr><td>DCE105:  </td><td>PRACTICAL:</td> <td>100</td> <td>40</td><td>62</td></tr>";
	
	echo "<tr><td>  </td><td>Grand Total</td> <td>500</td> <td>200</td><td>314</td></tr>";
	echo "</table>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	
	
	
	echo "<div><table  align=\"center\">";
	echo "<tr><td>Name:  </td><td>KANAKAGIRI SIVAPRASAD  </td></tr>";
	echo "<tr><td>E Code:  </td><td>KIMS1017DCE001  </td></tr>";
	echo "<tr><td>Semester :  </td><td>2 </td></tr>";
	echo "<tr><td>Branch:  </td><td> CIVIL </td></tr>";
	echo "<tr><td>Year Of Passing:  </td><td>2013 June</td></tr>";
	echo "<tr><td>:  </td><td>  </td></tr>";
	echo "</table><br></div>";
	
	
	echo "<table border=\"1\" align=\"center\">";
	echo "<tr><td>Paper Code:  </td><td>Subject:</td> <td>Marks</td> <td>Min</td><td>Obtained</td></tr>";
	echo "<tr><td>DCE106:  </td><td>APPLIED MECHANICS:</td> <td>100</td> <td>40</td><td>54</td></tr>";
	echo "<tr><td>DCE107:  </td><td>ENGINEERING DRAWING:</td> <td>100</td> <td>40</td><td>69</td></tr>";
	echo "<tr><td>DCE108:  </td><td>COMPUTER APPLICATION FOR ENGINEERING:</td> <td>100</td> <td>40</td><td>68</td></tr>";
	echo "<tr><td>DCE109:  </td><td>BUILDING MATERIAL:</td> <td>100</td> <td>40</td><td>58</td></tr>";
	echo "<tr><td>DCE110:  </td><td>WORKSHOP PRACTICE:</td> <td>100</td> <td>40</td><td>62</td></tr>";

	echo "<tr><td>  </td><td>Grand Total</td> <td>500</td> <td>200</td><td>311</td></tr>";
	echo "</table>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	
	
	
	echo "<div><table  align=\"center\">";
	echo "<tr><td>Name:  </td><td>KANAKAGIRI SIVAPRASAD  </td></tr>";
	echo "<tr><td>E Code:  </td><td>KIMS1017DCE001  </td></tr>";
	echo "<tr><td>Semester :  </td><td>3 </td></tr>";
	echo "<tr><td>Branch:  </td><td> CIVIL </td></tr>";
	echo "<tr><td>Year Of Passing:  </td><td>2013 DEC</td></tr>";
	echo "<tr><td>:  </td><td>  </td></tr>";
	echo "</table><br></div>";

	echo "<table border=\"1\" align=\"center\">";
	echo "<tr><td>Paper Code:  </td><td>Subject:</td> <td>Marks</td> <td>Min</td><td>Obtained</td></tr>";
	echo "<tr><td>DCE114:  </td><td>environmental studies & water quality:</td> <td>100</td> <td>40</td><td>55</td></tr>";
	echo "<tr><td>DCE115:  </td><td>HYDRAULICS:</td> <td>100</td> <td>40</td><td>66</td></tr>";
	echo "<tr><td>DCE116:  </td><td>surveyng-2:</td> <td>100</td> <td>40</td><td>70</td></tr>";
	echo "<tr><td>DCE117:  </td><td>CIVIL ENGINEERING DRAWING:</td> <td>100</td> <td>40</td><td>76</td></tr>";
	echo "<tr><td>DCE118:  </td><td>SERVEY- LAB:</td> <td>100</td> <td>40</td><td>59</td></tr>";
	echo "<tr><td>DCE119:  </td><td>ENVIRONMENTAL ENGINEERING -LAB :</td> <td>100</td> <td>40</td><td>64</td></tr>";
	echo "<tr><td>DC20:  </td><td>HYDRAULICS-LAB:</td> <td>100</td> <td>40</td><td>78</td></tr>";
	echo "<tr><td>  </td><td>Grand Total</td> <td>700</td> <td>280</td><td>468</td></tr>";
	echo "</table>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";


	echo "<table border=\"0\" align=\"center\">";
	echo "<tr><td>Name:  </td><td> KANAKAGIRI SIVAPRASAD </td></tr>";
	echo "<tr><td>E Code:  </td><td>KIMS1017DCE001  </td></tr>";
	echo "<tr><td>Semester :  </td><td>4 </td></tr>";
	echo "<tr><td>Branch:  </td><td> CIVIL </td></tr>";
	echo "<tr><td>Year Of Passing:  </td><td> 2014 June </td></tr>";
	echo "<tr><td>:  </td><td>  </td></tr>";
	echo "</table>";

	echo "<table border=\"1\" align=\"center\">";
	echo "<tr><td>Paper Code:  </td><td>Subject:</td> <td>Marks</td> <td>Min</td><td>Obtained</td></tr>";
	echo "<tr><td>DCE121:  </td><td>STRENGTH OF MATERIALS:</td> <td>100</td> <td>40</td><td>70</td></tr>";
	echo "<tr><td>DCE122:  </td><td>STRUCTURAL DESIGN-1:</td> <td>100</td> <td>40</td><td>62</td></tr>";
	echo "<tr><td>DCE123:  </td><td>BULDING CONSTRUCTION & SERVICES:</td> <td>100</td> <td>40</td><td>58</td></tr>";
	echo "<tr><td>DCE124:  </td><td>TRANSPORTATION  ENGINEERING:</td> <td>100</td> <td>40</td><td>65</td></tr>";
	echo "<tr><td>DCE125:  </td><td>ENVIRONMENTAL   ENGINEERING:</td> <td>100</td> <td>40</td><td>68</td></tr>";
	echo "<tr><td>DCE126:  </td><td>SERVEY- LAB -3:</td> <td>100</td> <td>40</td><td>60</td></tr>";
	echo "<tr><td>DCE127:  </td><td>CONSTRUCTION TECHNOLOGY - LAB:</td> <td>100</td> <td>40</td><td>72</td></tr>";
	echo "<tr><td>DCE128:  </td><td>TRANSPORTATION  ENGINEERING-LAB:</td> <td>100</td> <td>40</td><td>72</td></tr>";
	echo "<tr><td>  </td><td>Grand Total</td> <td>700</td> <td>280</td><td>523</td></tr>";
	echo "</table>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";

	echo "<table border=\"0\" align=\"center\">";
	echo "<tr><td>Name:  </td><td> KANAKAGIRI SIVAPRASAD </td></tr>";
	echo "<tr><td>E Code:  </td><td>KIMS1017DCE001  </td></tr>";
	echo "<tr><td>Semester :  </td><td>5 </td></tr>";
	echo "<tr><td>Branch:  </td><td> CIVIL </td></tr>";
	echo "<tr><td>Year Of Passing:  </td><td> 2014 DEC </td></tr>";
	echo "<tr><td>:  </td><td>  </td></tr>";
	echo "</table>";

	echo "<table border=\"1\" align=\"center\">";
	echo "<tr><td>Paper Code:  </td><td>Subject:</td> <td>Marks</td> <td>Min</td><td>Obtained</td></tr>";
	echo "<tr><td>DCE129:  </td><td>STRUCTURAL DESIGN-2:</td> <td>100</td> <td>40</td><td>72</td></tr>";
	echo "<tr><td>DCE130:  </td><td>THEORY OF STRUCTURES:</td> <td>100</td> <td>40</td><td>72</td></tr>";
	echo "<tr><td>DCE131:  </td><td>IRRIGATION ENGINEERING:</td> <td>100</td> <td>40</td><td>72</td></tr>";
	echo "<tr><td>DCE132:  </td><td>QUANTITY SURVEY & VALUATION -1:</td> <td>100</td> <td>40</td><td>72</td></tr>";
	echo "<tr><td>DCE133:  </td><td>REPAIR & MAINTENANCE OF CIVIL WORKS:</td> <td>100</td> <td>40</td><td>72</td></tr>";
	echo "<tr><td>DCE134:  </td><td>S. M.& SRTUCTURE LAB:</td> <td>100</td> <td>40</td><td>72</td></tr>";
	echo "<tr><td>DCE135:  </td><td>CONCRETE LAB:</td> <td>100</td> <td>40</td><td>72</td></tr>";
	echo "<tr><td>DCE136:  </td><td>PROJECT & SEMINAR:</td> <td>100</td> <td>40</td><td>72</td></tr>";
	echo "<tr><td>  </td><td>Grand Total</td> <td>800</td> <td>320</td><td>515</td></tr>";
	echo "</table>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";



	echo "<table border=\"0\" align=\"center\">";
	echo "<tr><td>Name:  </td><td> KANAKAGIRI SIVAPRASAD </td></tr>";
	echo "<tr><td>E Code:  </td><td>KIMS1017DCE001  </td></tr>";
	echo "<tr><td>Semester :  </td><td>6 </td></tr>";
	echo "<tr><td>Branch:  </td><td> CIVIL </td></tr>";
	echo "<tr><td>Year Of Passing:  </td><td> 2015 June </td></tr>";
	echo "<tr><td>:  </td><td>  </td></tr>";
	echo "</table>";

	echo "<table border=\"1\" align=\"center\">";
	echo "<tr><td>Paper Code:  </td><td>Subject:</td> <td>Marks</td> <td>Min</td><td>Obtained</td></tr>";

	echo "<tr><td>DCE137:  </td><td>SOIL MECHANICS :</td> <td>100</td> <td>40</td><td>79</td></tr>";
	echo "<tr><td>DCE138:  </td><td>CONSTRUCTION MANAGEMENT : </td> <td>100</td> <td>40</td><td>74</td></tr>";
	echo "<tr><td>DCE139:  </td><td>EARTHQUAKE ENGINEERING :</td> <td>100</td> <td>40</td><td>57</td></tr>";
	echo "<tr><td>DCE140:  </td><td>QUANTITY SURVEY & VALUATION-2:</td> <td>100</td> <td>40</td><td>59</td></tr>";
	echo "<tr><td>DCE141:  </td><td>HYDRAULIC STRUCTURES :</td> <td>100</td> <td>40</td><td>62</td></tr>";
	echo "<tr><td>DCE142:  </td><td>ADVANCE CONSTRUCTION TECHNOLOGY :</td> <td>100</td> <td>40</td><td>66</td></tr>";
	echo "<tr><td>DCE143:  </td><td>SOIL MECHANICS-LAB :</td> <td>100</td> <td>40</td><td>58</td></tr>";
	echo "<tr><td>DCE144:  </td><td>SURVEY LAB-IV :</td> <td>100</td> <td>40</td><td>68</td></tr>";
	echo "<tr><td>DCE145:  </td><td>PROJECT & CAMP :</td> <td>100</td> <td>40</td><td>73</td></tr>";
	echo "<tr><td>  </td><td>Grand Total</td> <td>700</td> <td>360</td><td>596</td></tr>";
	echo "</table>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";



}

else if(!empty($ecode))
{
	echo "Invalide E-code";
}

?>

</body>


</html>
