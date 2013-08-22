<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
/**
 * Simple class to write CSV files with.
 * 
 * @author Berry Langerak <berry@ayavo.nl>
 */
class CsvWriter {
    /**
     * The delimiter used. Default is semi-colon, because Microsoft Excel is an asshole.
     * 
     * @var string
     */
    protected $delimiter = ",";

    /**
     * Enclose values in the following character, if necessary.
     * 
     * @var string
     */
    protected $enclosure = '"';

    /**
     * Constructs the CsvWriter.
     */
    public function __construct( ) {
        $this->buffer = fopen( 'php://temp', 'w+' );
    }

    /**
     * Writes the values of $line to the CSV file.
     * 
     * @param array $line 
     * @return CsvWriter $this
     */
    public function write( array $line ) {
        fputcsv( $this->buffer, $line, $this->delimiter, $this->enclosure );
        return $this;
    }

    /**
     * Returns the parsed CSV.
     * 
     * @return string
     */
    public function output( ) {
        rewind( $this->buffer );
        $output = $this->readBuffer( );
        fclose( $this->buffer );

        return $output;
    }

    /**
     * Reads the buffer.
     * @return type 
     */
    protected function readBuffer( ) {
        $output = '';
        while( ( $line = fgets( $this->buffer ) ) !== false ) {
            $output .= $line;
        }
        return $output;
    }
}
//$connect = mysql_connect("localhost","root","");
$connect = mysql_connect("103.247.238.164","root","M1$DB@2012");
mysql_select_db("bbs_code",$connect); 

/**
 * Example usage, in your scenario:
 */
$values = mysql_query( "SELECT division,divcode,district,districtcode,upazilla,upazillacode,name,unioncode from bbscode" );

$csv = new CsvWriter( );
$csv->write( array( 'Division','Division Code', 'District','districtCode','Upazilla','upazillacode','Union','union code ') ); // write header.

while( $line = mysql_fetch_assoc( $values ) ) {
    $csv->write( $line );
}

$filename = $file."_".date("Y-m-d_H-i",time());
header("Content-type: text/csv");
header("Content-disposition: csv" . date("Y-m-d") . ".csv");
header( "Content-disposition: filename=".$filename.".csv");

print $csv->output( );

exit();

?>