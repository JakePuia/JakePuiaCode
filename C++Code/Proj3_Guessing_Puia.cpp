//Jake Puia
//Project 3 Guessing Game
//C++ Programming Spring 2020
//2-4-2020
//Program that will have the user guess a number between 1-1000
//Depeneding on the # of guesses the user will get a unique response


/*
*******HELLO THIS IS A SAMPLE OF A VERY BASIC C++ CODE I HAVE WRITTEN FROM SCRATCH*******

This semester (spring 2020) I am taking a C++ coding course to get an in depth view of 
C++ coding. This is one of the first 3 programs I have written. By the end of the semester
I wrote 12 programs, each one more complex than the last.
*/

#include <iostream>
#include <stdio.h>
#include <cstdlib>	//rand and srand
#include <ctime>	//time
#include <string>

using namespace std;
int main() {

	while (true) {
		//simple output print statements to expain what is going on
		std::cout << "Try and guess the number between 1-1000 " << std::endl;
		std::cout << "Can you guess the number? " << std::endl;
		std::cout << "Enter your first guess: " << std::endl;

		//random seed using time
		srand(time(0));

		//generating a random number between 1-1000
		//the +1 makes it so 1000 could be a number rather than 0-999
		int random;
		random = rand() % 1000 + 1;


		//std::cout << random << std::endl; //testing number

		//Counting number of attempts
		int attempt = 1;
		//displaying the current attempt
		std::cout << "Attempt number:" << attempt << std::endl;

		//getting the user guess and storing it in "guess"
		int guess;
		std::cin >> guess;

		//if guess numer 1 does not equal the number start going through
		//the loop until the number is guessed correctly
		do {
			//do this if the guress is higher than the number
			if (guess > random) {  
				std::cout << "The number is lower! Try again" << std::endl;
				attempt++; //incrementing attempt with every try (time looped)

				//displaying the current attempt
				std::cout << "Attempt number:" << attempt << std::endl;
			}

			//do this if the guess is lower than the number
			if (guess < random) { 
				std::cout << "The number is higher! Try again" << std::endl;
				attempt++; //incrementing attempt with every try (time looped)

				//displaying the current attempt
				std::cout << "Attempt number:" << attempt << std::endl;
			}
			//if the guess does not equal the number then get another guess
			if (guess != random) {
				std::cin >> guess;
			}
		} while (guess != random);

		//When they uess the number correctly 
		if (guess = random) {
			std::cout << "You guessed it!" << std::endl;
		}

		//tracking the number of attempts for below 10 attempts
		if (attempt < 10) {
			std::cout << "Either you got lucky or you know the secret! Number of attempts: " << attempt << std::endl;
		}

		//tracking the numbr of attempts above 10 attempts
		if (attempt > 10) {
			std::cout << "You should be able to do better! Number of attempts: " << attempt << std::endl;
		}

		//if they hit exactly 10 attempts
		if (attempt == 10) {
			std::cout << "You know the secret! Number of attempts: " << attempt << std::endl;
		}
		
		//asking if they want to play again
		std::cout << "Do you want to play again? (Y or N) -- MUST BE CAPITAL"<< std::endl;
		char playAgain; //user input variable
		std::cin >> playAgain;
		char yes = 'Y'; //Y is to continue

		//if they do not type in Y to continue go through this if statement and break out of the loop
		if (yes != playAgain) {
			break;
		}
	}

}