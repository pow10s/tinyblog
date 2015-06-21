// ConsoleApplication1.cpp : Defines the entry point for the console application.
//

#include "stdafx.h"
#include <iostream>
#include "cmath"
using namespace std;
void getWord(){
	char s[80];
	int word, count = 0;
	cout << "Input word: " << endl;
	cin.get(s, 80);
	int i = 0;
	while (s[i] == ' ' && s[i] != '\0')
		i++;
	word = 0;
	while (s[i] != '\0') {
		if (s[i] != ' ' && word == 0) {
			word = 1;
			count++;
		}
		else  if (s[i] == ' ')
			word = 0;
		i++;
	}
	cout << "Number of words in string: " << count<<'\n';
	cout <<"String: " << s <<'\n';
	cin.get();
}
int _tmain(int argc, _TCHAR* argv[])
{
	system("chcp 1251");
	system("cls");
	getWord();
	system("pause");
	return 0;
}

