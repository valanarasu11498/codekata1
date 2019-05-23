#include <stdio.h>
#include<string.h>
int main()
{
    int n,c=0;
    scanf("%d",&n);
    while(n!=0)
    {
        c=c+1;
        n=n/10;
    }
    printf("%d",c);
    return 0;
}
