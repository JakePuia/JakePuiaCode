   // randomwriter.java
   // ******************************************************************
   // This program under development *will* [eventually] generate random
   //    passages based on an input source file (likely a classic).  It
   //    will choose a random word from the source, and based on the 
   //    probability of a word following the previously chosen word,
   //    choose the next word. 
   //
   //    Command line inputs: sourcefile resultfile NWordsToGenerate 
   //
   // Tyler Paul and Jake Puia
   //
   // Frist Edits were made on 4/2/2019                   
   // Final Edits were made on 4/10/2019                   
   //   
   // Computer Science II
   // -----------------------------------------------------------------
import java.io.*;
import java.util.*;
public class randomwriter
   {
  public static void main(String[] args) throws IOException {
    
     
     System.out.println("In order to run this program please enter the following in the interactions window: \n ' 'run randomwriter' 'filename.txt' 'newfile.txt' 'number of words generated' ' \n Then hit enter.");
     System.out.println("EXAMPLE: run randomwriter constitution.txt file.txt 30 \n");
     //print statement that insturcts the user how to run the program JP and TP 4/3/2019
                        
     
       //Get file name arguments from command line
       
       String sourceFileName = args[0];   //getting the orignal file from user
       String resultFileName  = args[1];  //getting name of new file from user
       int N = Integer.parseInt(args[2]); //number of words generated
       
       
       int nWords = 0;
       int nUniqueWords = 0;  //Keeping track of the unique words in the arraylist JP and TP 4/9/19
       int nFirst = 100;
       long startTime;        //for emperical time measurement
       long stopTime;         //elapsed time is difference in millisec
       String followWord;     //string varibale to load words into follows LL TP and JP 4/2/19
       String curWord;        //string variable for temporary use to add words into LL JP and TP 4/8/19
       String getNext;        //getting the next word out of the linked list  JP and TP 4/9/2019
       int sizeLL;            //used to find the size of the linked list when printing out random word JP and TP 4/9/2019
       int loc;               //location variable for linked list JP and TP 4/9/2019
       
       
       //Data structure declarations 
   ArrayList <String> unique = new ArrayList<String>();                                   //Array list of unique words JP TP 4/2/19
   ArrayList <LinkedList<String>> follows = new ArrayList<LinkedList<String>>();          //Linked list of words that follow unique words JP TP 4/2/19
       
       //this is a simple linked list of all words (strings)
   LinkedList <String> words= new LinkedList <String>();
   
       //this is an arraylist of linked lists of strings
   ArrayList <LinkedList<String>> byFirstLetter = new ArrayList <LinkedList<String>>(27);
     
       //initialize this array of linkedlists
   for(int i=0; i<27; i++){
       byFirstLetter.add(i,new LinkedList<String>());
   }
   
       //Prepare files
   Scanner dataFile = new Scanner(new FileReader(sourceFileName));
   PrintWriter outFile = new PrintWriter(new FileWriter(resultFileName));
        //Read a line from the source file until end of file
   String firstWord = dataFile.next(); 
   String secondWord;
   
   curWord = firstWord;     //JP and TP 4/8/19 use curWord to manipulate and then firstWord will not be changed
   
   outFile.println(" ");                                             // JP 4/10/19
   outFile.println("------------first 150 words----------------");   // formatting change
   
   System.out.println("Approximate number of words in the document: ");  //JP 4/10/19
   
   startTime = System.currentTimeMillis();
   while(dataFile.hasNext()){
       secondWord = dataFile.next();
        nWords++;
        
        
        followWord = secondWord; //JP and TP 4/4/2019 variable that holds the word that follows to add to LL
        
        if(nWords % 1000 ==0) System.out.println(nWords+" words");
        //only print the first N words for debugging
      
        
                                    //JP and TP 4/8/2019 (if else statement)
        
        if(unique.indexOf(curWord) != -1){                        //do this if command if the word was not unique and did not = -1
           follows.get(unique.indexOf(curWord)).add(followWord);  //Adding the word that follows to the end of the linked list
        }
        else {
          unique.add(curWord);                                   //the word is unique and is added to the end of the arrayList
          LinkedList <String> NewLL = new LinkedList <String>(); //adding a new linked list to the arrayList that follow the unique word
          NewLL.add(followWord);
          follows.add(NewLL);
          nUniqueWords ++;
        }
        
        
       if(nWords<= nFirst){
          outFile.print(curWord+" ");
          outFile.flush();
       } 
       // words.add(firstWord);//adding word to lone linked list for demo only
   
        //and put words into lists by their first letter
        char c = Character.toLowerCase(curWord.charAt(0));
        int ci = (c>='a' && c<='z')? c-'a' : 26;
        ((LinkedList)(byFirstLetter.get(ci))).add(curWord);
   
        curWord = followWord;
   } 


     //**************************END OF THE WHILE LOOP**************************//
    
   
   
    //JP and TP 4/9/2019 adding the last word of the file to the unique list since it is misssed in the loop
    //it is added using a using the first word of the file as its follow word so the whole file is a loop
   
       if(unique.indexOf(curWord) != -1){                        //do this if command if the word was not unique and did not = -1
           follows.get(unique.indexOf(curWord)).add(firstWord);  //Adding the word that follows to the end of the linked list
        }
        else {
          unique.add(curWord);                                   //the word is unique and is added to the end of the arrayList
          LinkedList <String> NewLL = new LinkedList <String>(); //adding a new linked list to the arrayList that follow the unique
          NewLL.add(firstWord);
          follows.add(NewLL);
        }
  
   
   //System.out.println(unique);     //testing the unique ArrayList    JP 4/9/19
   //System.out.println(follows);    //testing the follows LinkedList  JP 4/9/19
        
        
   
   stopTime = System.currentTimeMillis();
   System.out.println("\nElapsed input time = "+(stopTime-startTime)+" msecs.");
   
   startTime = stopTime;
         //  Let's dump the front of the list to verify same sequence
   
   outFile.println(" ");                                            //
   outFile.println(" ");                                            // 
   outFile.println(" ");                                            //Formatting changes JP 4/9/2019
   outFile.println(N + " word(s) will be generated for each list"); //
   outFile.println(" ");                                            //
   outFile.println(" ");                                            //
   
   outFile.println("------------from unique list----------------");
   outFile.flush();
   System.gc();
   for(int i=0; i<N; i++){
         outFile.print(unique.get(i)+" ");
   }
   
   //   Level 0: random selection of words from lone list
   
   outFile.println(" ");  //
   outFile.println(" ");  //Formatting changes JP 4/9/2019
   outFile.println(" ");  //
   
   outFile.println("------------random list----------------");
   outFile.flush();
   Random rand = new Random(); 
   for (int i=0; i<N; i++){
          outFile.print(unique.get(rand.nextInt(nUniqueWords))+" ");
   }
   
   //  Random words from each letter category
   
   outFile.println(" ");  //
   outFile.println(" ");  //Formatting changes JP 4/9/2019
   outFile.println(" ");  //
   
   outFile.println("------------random alpha list----------------");
   outFile.flush();
   
   //***********************JP and TP 4/9/2019***********************
   
   loc = rand.nextInt(nUniqueWords);                          //getting the location of the random unique word
   for (int i=0; i<N; i++){
     sizeLL = follows.get(loc).size();                        //gets the size of the follows linked list
     getNext = follows.get(loc).get(rand.nextInt(sizeLL));    //set getNext to the random word that will be printed
     outFile.print(getNext + " ");                              
     loc = unique.indexOf(getNext);                           //get the location of the next unique word
                                        
   }
     
        //LinkedList ll = (LinkedList)(byFirstLetter.get(i));
        //int lllen = ll.size();
                  //outFile.print(ll);
        //if(lllen>1){
          //outFile.print(ll.get(rand.nextInt(lllen))+" ");
        //}
   
   
   outFile.flush();
   outFile.close();
   stopTime = System.currentTimeMillis();
   System.out.println("Elapsed output time = "+(stopTime-startTime)+" msecs.");
   }
 }


/********************************************************************************************
run randomwriter constitution.txt file.txt 200
In order to run this program please enter the following in the interactions window: 
 ' 'run randomwriter' 'filename.txt' 'newfile.txt' 'number of words generated' ' 
 Then hit enter. 
EXAMPLE: run randomwriter constitution.txt file.txt 30 
 
Approximate number of words in the document:  
250 words 
500 words 
750 words 
1000 words 
1250 words 
1500 words 
1750 words 
2000 words 
2250 words 
2500 words 
2750 words 
3000 words 
3250 words 
3500 words 
3750 words 
4000 words 
4250 words 
4500 words 

Elapsed input time = 462 msecs. 
Elapsed output time = 78 msecs. 
**********************************************************************************************
*/
