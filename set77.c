#include<math.h>
#include<stdio.h>
#include<string.h>

int main()
{
   
    int n,r;
    scanf("%d",&n);
    if(n%10==0)
    {
        printf("%d",n);
    }
    else
    {
        r=n%10;
        r=10-r;
        printf("%d",n+r);
    }
    return 0;
}
