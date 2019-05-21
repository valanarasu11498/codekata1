#include <stdio.h>

int main()
{
    int a=1,b=1,i,c,n;
    scanf("%d",&n);
    if(n<=0)
    {
        printf("invalid input");
    }
    else if(n==1)
    {
        printf("1");
    }
    else
    {
    printf("%d %d",a,b);
    for(i=3;i<=n;i++)
    {
        c=a+b;
        printf(" %d",c);
        a=b;
        b=c;
    }
    }
    return 0;
}
