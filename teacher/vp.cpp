#inlude <iostream>
using namespace std;
int sequence(int k) {
   int i=1;
   k=1;
   for(i=1;i<k;i++){
       k*=2;

       cout<<k;
   }
    return k;
}
int main(){
    float num;
    cout<<"Enter the number: ";
    cin>>num;
    cout<<"The squence is: "<<sequence(num);

    return 0;
}