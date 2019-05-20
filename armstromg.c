#include <stdio.h>
#include <math.h>
int main()
{
    int n,d,dp,dc=0,sum=0,m;
    scanf("%d",&n);
    m=n;
    while(n>0)
    {
        dc++;
        n=n/10;
    }
    n=m;
    while(n>0)
    {
        d=n%10;
        dp=pow(d,dc);
        sum=sum+dp;
        n=n/10;
    }
    if(sum==m)
    {
        printf("yes");
    }
    else
    {
        printf("no");
    }
    return 0;
}
