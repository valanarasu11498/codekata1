#include <stdio.h>
#include <math.h>

int main()
{
    int n,m,rev=0,d;
    scanf("%d",&n);
    m=n;
    while(n!=0)
    {
        d=n%10;
        rev=rev*10+d;
        n=n/10;
    }
    if(m==rev)
    {
        printf("yes");
    }
    else
    {
        printf("no");
    }
    return 0;
}
