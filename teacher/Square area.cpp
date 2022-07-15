#inlude <iostream>
using namespace std;
float area(float s, float A) {
    A=s*s;
    return A;
}
int main(){
    float side,are;
    cout<<"Enter the side of square: ";
    cin>>side;
    cout<<"The area of Square is: "<<area(side,are);

    return 0;
}