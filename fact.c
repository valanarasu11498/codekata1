#include <stdio.h>
#include <math.h>

int main()
{
    int n,fact=1;
    scanf("%d",&n);
    if(n<0)
    {
        printf("invalid");
        return 0;
    }
    if(n==1)
    {
        printf("1");
    }
    else
    {
        while(n!=0)
        {
            fact=fact*n;
            n=n-1;
        }
        printf("%d",fact);
    }
    return 0;
}
