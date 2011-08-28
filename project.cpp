#include <iostream> //cin, cout
#include <fstream>  //open , read file
#include <string>   
#include <cstdio>
#include <stdio.h>
#include <stdlib.h>
#include <cstdlib> // random
using namespace std;


class test
	{
	public:


	char fileName[64];
	void showData();
	void parseRss();
	};



void test::parseRss()
{

system("perl get-rss");
cout << "The rss file was parsed successfully. Select 1. View data" << endl;

}

void test::showData()
{

	ifstream infile;
	string sign="°";

	infile.open ("text.log");
	if (infile.is_open()) { 
	while (!infile.eof())
      		cout << (char) infile.get();
	cout << sign << " C" << endl;
	infile.close();
	}else{cout << "cannot open file for reading" << endl;}

}


int main(void)
{

	test tst;
	int selectedOption;
	bool On = true;


while(On != false) {
	cout << "Select an option :" << endl;
	cout << "1. View data." << endl;
	cout << "2. Parse RSS." << endl;
	cout << "3. Exit." << endl;

	cin >> selectedOption;


switch (selectedOption) {

case 1 : tst.showData(); break ;			
case 2 : tst.parseRss(); break ;
case 3 : exit(0); break ;
default : cout << "Please select an option";break;
			}

On=true;
}
	return 0;
}