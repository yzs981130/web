#!/usr/bin/perl -w
# This CGI program processes the consumer electronics survey
#  form and updates the file that stores the survey

use CGI ":standard";

sub error {
    print "Error file could not be opened in conelec1.pl <br/>";
    print end_html();
    exit(1);
}

my($boolean, $watched, $gender, $age, $support) = (param("boolean"), param("watched"), param("gender"), param("age"),param("support"));

print header();

$index = 0;
if()